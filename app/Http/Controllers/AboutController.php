<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::find(1);

        return view('backend.about', compact('data'));
    }

    public function createOrUpdate(Request $request)
    {
        $db = About::find(1);
        $data = $request->validate([
            'about' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'phone' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|active_url',
            'instagram' => 'nullable|active_url',
            'twitter' => 'nullable|active_url',
            'youtube' => 'nullable|active_url',
            'map' => 'nullable|active_url',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/about');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/about/'.$name;

            $image_old = public_path($db->image);
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        About::updateOrCreate(['id' => 1], $data);

        return redirect()->route('tentang')->with('success', 'About berhasil diubah');

    }
}
