<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;

class AdminController extends Controller
{
    //
    public function index() {
        if(Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $check = self::check();
            if($check) {
                return view('admin/dashboard-admin');
            } else {
                return back();
            }
        }
    }

    public function user() {
        if(Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $check = self::check();
            if($check) {
                $users = User::orderBy('created_at', 'DESC')->get();
                return view('admin/admin-user')->with('users', $users);
            } else {
                return back();
            }
        }
    }

    public function showUpdate($id) {
        if(Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $check = self::check();
            if($check) {
                $user = User::findOrFail($id);
                return view('admin/admin-user-update')->with('user', $user);
            } else {
                return back();
            }
        }
    }

    public function userUpdate(ProfileUpdateRequest $request, $id) {
        $request->validate([
            'name' => ['string', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'surname' => ['string', 'max:20'],
            'age' => ['numeric', 'min:18'],
            'description' => ['string', 'max:255'],
            'gender' => [Rule::in(['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])],
            'sexualorientation' => [Rule::in(['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])],
            'romanticorientation' => [Rule::in(['Homoromantique', 'Biromantique', 'Panromantique', 'Demi_romantique', 'Aromantique', 'Heteroromantique'])],
            'lookingfor' => [Rule::in(['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])],
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->surname = $request->surname;
        $user->age = $request->age;
        $user->description = $request->description;
        $user->gender = $request->gender;
        $user->sexualorientation = $request->sexualorientation;
        $user->romanticorientation = $request->romanticorientation;
        $user->lookingfor = $request->lookingfor;

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return back();
    }

    public function userDelete($id) {

        $user = User::findOrFail($id);

        if($user){
            $user->delete();
        } else {
            return back();
        }

        return back();
    }    

    public function posts() {
        if(Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $check = self::check();
            if($check) {
                $posts = Posts::orderBy('created_at', 'DESC')->get();
                return view('admin/admin-posts')->with('posts', $posts);
            } else {
                return back();
            }
        }
    }

    public function showPostUpdate($id) {
        if(Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $check = self::check();
            if($check) {
                $post = Posts::findOrFail($id);
                return view('admin/admin-post-update')->with('post', $post);
            } else {
                return back();
            }
        }
    }

    public function postUpdate(Request $request, $id) {
        $request->validate([
            'title' => ['string', 'max:50'],
            'content' => ['string', 'max:1020'],
            'picture' => ['image', 'max:16384']
        ]);
        
        $post = Posts::find($id);

        $user = User::find($post->post_user_id);

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('picture')) {
            $imageName = time() . '.' . $request->picture->extension();
            $path = 'images/publications/' . $user->id;

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $request->picture->move($path, $imageName);
            $post->picture = $request->picture;
        };

        $post->updated_at = now();
        $post->save();

        return back();
    }

    public function postsDelete($id) {

        $post = Posts::findOrFail($id);

        if($post){
            $post->delete();
        } else {
            return back();
        }

        return back();
    } 

    private function check() {
        $user = User::find(Auth::id());
        $admin = $user->isAdmin;
        if($admin === 1) {
            return true;
        } else {
            return false;
        }
    }
}
