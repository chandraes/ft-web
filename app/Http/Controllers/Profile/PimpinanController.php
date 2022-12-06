<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Pimpinan;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;
use App\Models\Profiles\CategoryPimpinan;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pimpinan::join('category_pimpinans', 'category_pimpinans.id', '=', 'pimpinans.category_pimpinan_id')
            ->select('pimpinans.*', 'category_pimpinans.name as category_name')
            ->get();

        return view('backend.profiles.pimpinan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryPimpinan::select('id','name')->get();
        return view('backend.profiles.pimpinan.create', compact('category'));
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
            'jabatan' => 'required|min:3',
            'category_pimpinan_id' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/pimpinan');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/pimpinan/'.$name;
        }

        Pimpinan::create($data);

        return redirect()->route('pimpinan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pimpinan::findOrFail($id);
        $category = CategoryPimpinan::select('id','name')->get();
        return view('backend.profiles.pimpinan.edit', compact('data', 'category'));
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
            'category_pimpinan_id' => 'required',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);

        $pimpinan = Pimpinan::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/pimpinan');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/pimpinan/'.$name;

            $image_old = public_path($db->image);
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        $pimpinan->update($data);

        return redirect()->route('pimpinan.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);
        $image_old = public_path($pimpinan->image);
        if (file_exists($image_old)) {
            //delete image from folder
            File::delete($image_old);
        }
        $pimpinan->delete();
        return redirect()->route('pimpinan.index')->with('success', 'Data berhasil dihapus');
    }
}
