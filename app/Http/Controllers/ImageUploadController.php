<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    public function upload(Request $request)
    {
        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('picture');

        $image_info = getimagesize($image->getPathname());
        $mime_type = $image_info['mime'];
        $allowed_mime_types = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
        if (!in_array($mime_type, $allowed_mime_types)) {
            return back()->with('error', 'Le type MIME de l\'image est invalide.');
        }
        
        $imageName = time().'.'.$request->picture->extension();

        $request->picture->move(public_path('images'), $imageName);

        return back()->with('success',"L'image a été enregistrée")->whith('image', $imageName);
    }
}
