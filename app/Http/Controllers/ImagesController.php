<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ImageFormRequest;

class ImagesController extends Controller
{
    public function store(ImageFormRequest $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            return redirect('/')->with('status', 'Your image has been uploaded successfully!');
            $imagePath = public_path().'/images/'.$name;
            $file = Image::make($imagePath)->blur(15)->save();
        }

    }
}
