<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImageUploadController extends Controller
{
    //

    public function index()
    {
        return view('imageUpload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:16384',
        ]);

        $user = Auth::user();

        if ($request->hasFile('picture')) {
            $imageName = time() . '.' . $request->picture->extension();
            $path = 'images/' . $user->id;

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            $request->picture->move($path, $imageName);
            // $blogs->picture = $imageName;
            $user->picture = $imageName;
        };

        // $imageName = time().'.'.$request->image->extension();

        // $request->image->move(public_path('images'), $imageName);

        $user->save();
        

        return back()->with('success',"L'image a été enregistrée")->whith('image', $imageName);
    }
}
