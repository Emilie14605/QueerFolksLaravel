<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class PostsController extends Controller
{
    //
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $posts = Posts::orderBy('created_at', 'DESC')->get();
            return view('publications')->with('posts', $posts);
        }
    }

    public function form()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            if (Auth::user()->isAdmin) {
                return view('publications-ajout');
            } else {
                return redirect()->back();
            }
        }
    }

    public function details($id)
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connectez pour accéder à cette page');
        } else {
            $post = Posts::findOrFail($id);
            $dateCreation = date('d-m-Y', strtotime($post->created_at));
            return view('publications-details')->with('post', $post)->with('date', $dateCreation);
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string', 'max:1020'],
            'picture' => ['required', 'image', 'max:16384']
        ]);

        $user = Auth::user();

        $blogs = new Posts();
        $blogs->title = $request->title;
        $blogs->author = $user->surname;
        $blogs->content = $request->content;

        if ($request->hasFile('picture')) {
            $imageName = time() . '.' . $request->picture->extension();
            $path = 'images/publications/' . $user->id;

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $request->picture->move($path, $imageName);
            $blogs->picture = $imageName;
        };
        
        $blogs->post_user_id = $user->id;
        $blogs->created_at = now();
        $blogs->updated_at = now();

        $blogs->save();

        return redirect('publications')->with('success', "La publication a été ajouté");
    }

    public function delete($id)
    {
        $blogs = Posts::findOrFail($id);
        $blogs->delete();
        return redirect('publications')->with('success', "La publications a été supprimé");
    }
}
