<?php

namespace App\Services;

use Illuminate\Http\Request;

class ImageService
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $uniqueName, 'public');
            return 'storage/' . $imagePath;
        }

        return null;
    }
}

