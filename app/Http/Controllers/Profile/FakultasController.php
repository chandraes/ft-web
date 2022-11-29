<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Fakultas;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Fakultas::all();
        return view('backend.profiles.fakultas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.profiles.fakultas.create');
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
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'nullable',
            'is_active' => 'nullable'
        ]);

        if ($request->has('is_active')) {

            if ($data['is_active'] == "on") {
                Fakultas::where('is_active', 1)->update(['is_active' => 0]);
                $data['is_active'] = 1;
            }

        } else {
            $data['is_active'] = 0;
        }

        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/fakultas');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/fakultas/'.$name;
        }

        // dd($data);
        Fakultas::create($data);

        return redirect()->route('fakultas.index')->with('success', 'Profile Fakultas berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Fakultas::find($id);
        return view('backend.profiles.fakultas.edit', compact('data'));
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
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'nullable',
            'is_active' => 'nullable'
        ]);

        if ($request->has('is_active')) {

            if ($data['is_active'] == "on") {
                Fakultas::where('is_active', 1)->update(['is_active' => 0]);
                $data['is_active'] = 1;
            }

        } else {
            $data['is_active'] = 0;
        }

        $db = Fakultas::find($id);
        //store image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/fakultas');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/fakultas/'.$name;

            $image_old = public_path($db->image);
            
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }



        $db->update($data);

        return redirect()->route('fakultas.index')->with('success', 'Profile Fakultas berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete image and fakultas data
        $fakultas = Fakultas::find($id);
        $image_path = public_path($fakultas->image);

        if (file_exists($image_path)) {
            //delete image from folder
            File::delete($image_path);

        }
        $fakultas->delete();

        return redirect()->route('fakultas.index')->with('success', 'Profile Fakultas berhasil dihapus');
    }
}
