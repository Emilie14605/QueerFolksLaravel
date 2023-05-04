<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BlogsController extends Controller
{
    //
    public function seeBlogs()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            $blogs = Blogs::orderBy('created_at', 'DESC')->get();
            return view('blogs')->with('blogs',$blogs);
        }
        
    }

    public function seeBlogsForm()
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connecter pour accéder à cette page');
        } else {
            if(Auth::user()->isAdmin){
                return view('blogsajout');
            } else {
                return redirect()->back();
            }
        }
    }

    public function details($id)
    {
        if(Auth::guest())
        {
            return redirect()->route('login')->with('status', 'Vous devez vous connectez pour accéder à cette page');
        } else {
            $blog = Blogs::findOrFail($id);

            return view('blogsdetails')->with('blog', $blog);
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
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

        return redirect('blogs')->with('success', "Le blog a été ajouté");
    }

    public function supprimerBlog($id)
    {
        $blogs = Blogs::findOrFail($id);
        $blogs->delete();
        return redirect('blogs')->with('success',"Le blogs a été supprimé");
    }
}
