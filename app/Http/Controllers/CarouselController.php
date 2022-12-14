<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Carousel::all();
        return view('backend.carousel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.carousel.create');
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
            'title' => 'required|min:3|string|max:255',
            'subtitle' => 'required|min:3|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5012',
        ]);

        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/carousel');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/carousel/'.$name;
        }

        Carousel::create($data);

        return redirect()->route('carousel.index')->with('success', 'Carousel berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Carousel::find($id);
        return view('backend.carousel.edit', compact('data'));
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
            'title' => 'required|min:3|string|max:255',
            'subtitle' => 'required|min:3|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5012',
        ]);

        $db = Carousel::find($id);
        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/carousel');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/carousel/'.$name;

            $image_old = public_path($db->image);
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        $db->update($data);

        return redirect()->route('carousel.index')->with('success', 'Carousel berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Carousel::find($id);

        $image_old = public_path($db->image);

        if (file_exists($image_old)) {
        //delete image from folder
            File::delete($image_old);
        }

        $db->delete();

        return redirect()->route('carousel.index')->with('success', 'Carousel berhasil dihapus');
    }
}
