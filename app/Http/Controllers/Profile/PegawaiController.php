<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Pegawai;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('backend.profiles.pegawai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.profiles.pegawai.create');
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
            'name' => 'required|min:3',
            'jabatan' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/pegawai');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/pegawai/'.$name;
        }

        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pegawai::findOrFail($id);
        return view('backend.profiles.pegawai.edit', compact('data'));
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
            'name' => 'required|min:3',
            'jabatan' => 'required|min:3',
            'description' => 'nullable',
            'image' => 'nullable|mimes:jpeg,jpg,png',
        ]);

        $pegawai = Pegawai::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/pegawai');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/pegawai/'.$name;

            $image_old = public_path($pegawai->image);
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        $pegawai->update($data);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::findOrFail($id);
        $image_old = public_path($data->image);
        if (file_exists($image_old)) {
            //delete image from folder
            File::delete($image_old);
        }
        $data->delete();
        return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus');
    }
}
