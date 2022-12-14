<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use App\Models\Lab\Lab;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lab::paginate(8);
        return view('backend.lab.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.lab.create');
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
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kepala_lab' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable',
            'gallery_image' => 'nullable',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/lab');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/lab/'.$name;
        }

        DB::transaction(function () use ($request, $data) {

            $lab = Lab::create($data);

            if ($request->hasFile('gallery_image')) {

                foreach ($request->file('gallery_image') as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/gallery');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['gallery_image'] = '/images/lab/gallery/'.$name;

                    $lab->gallery()->create($data);
                }
            }
        });

        // Lab::create($data);

        return redirect()->route('lab.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lab::findOrFail($id);
        return view('backend.lab.edit', compact('data'));
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
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'kepala_lab' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable',
            'gallery_image' => 'nullable',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg|max:5120'
        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        $db = Lab::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/lab');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/lab/'.$name;

            if (File::exists(public_path($db->image))) {
                File::delete(public_path($db->image));
            }
        }

        DB::transaction(function () use ($request, $data, $db) {

            $db->update($data);

            if ($request->hasFile('gallery_image')) {

                foreach ($request->file('gallery_image') as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/gallery');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['gallery_image'] = '/images/lab/gallery/'.$name;

                    $db->gallery()->create($data);
                }
            }
        });

        return redirect()->route('lab.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Lab::find($id);

        if (File::exists(public_path($db->image))) {
            File::delete(public_path($db->image));
        }

        foreach ($db->gallery as $gallery) {
            if (File::exists(public_path($gallery->gallery_image))) {
                File::delete(public_path($gallery->gallery_image));
            }
        }

        DB::transaction(function () use ($db) {

            $db->gallery()->delete();

            $db->delete();

        });



        return redirect()->route('lab.index')->with('success', 'Data berhasil dihapus');
    }
}
