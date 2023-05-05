<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    //

    public function form()
    {
        if (Auth::guest()) {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            return view('profile-blog-form');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'content' => ['required', 'string', 'max:255'],
            'picture' => ['required', 'image', 'max:16384']
        ]);

        $user = Auth::user();

        $blogs = new Blogs;
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        $blogs->author = $user->surname;
        $blogs->created_at = now();
        $blogs->updated_at = now();
        $blogs->post_user_id = $user->id;


        if($request->hasFile('picture')){
            $imageName = time() . '.' . $request->picture->extension();
            $path = 'images/blogs/' . $user->id;
    
            if(!file_exists($path)){
                mkdir($path, 0777, true);
            }
    
            $request->picture->move($path, $imageName);
            $blogs->picture = $imageName;
        };

        $blogs->save();

        return redirect('profile-blog-form')->with('success', "Le blog a été ajouté");
    }

    public function delete($id)
    {
        $blogs = Blogs::findOrFail($id);
        $blogs->delete();
        return redirect('publications')->with('success',"La publications a été supprimé");
    }
}
