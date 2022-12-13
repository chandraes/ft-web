<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::all();
        return view('backend.gallery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|min:3|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/gallery/'.$name;
        }

        Gallery::create($data);

        return redirect()->route('galeri.index')->with('success', 'Gallery berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('backend.gallery.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'nullable|min:3|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $db = Gallery::find($id);
        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/gallery/'.$name;

            $image_old = public_path($db->image);

            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        $db->update($data);

        return redirect()->route('galeri.index')->with('success', 'Gallery berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $image_path = public_path($data->image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $data->delete();
        return redirect()->route('galeri.index')->with('success', 'Gallery berhasil dihapus');
    }
}
