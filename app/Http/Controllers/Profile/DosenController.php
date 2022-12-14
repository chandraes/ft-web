<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Dosen;
use App\Models\Profiles\CategoryDosen;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryDosen::all();
        $data = Dosen::join('category_dosens', 'category_dosens.id', '=', 'dosens.category_dosen_id')
            ->select('dosens.*', 'category_dosens.jurusan_prodi')
            ->get();
        return view('backend.profiles.dosen.index', compact('data', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryDosen::all();
        return view('backend.profiles.dosen.create', compact('category'));
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
            'name' => 'required|min:3|string|max:255',
            'category_dosen_id' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5012',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/dosen');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/dosen/'.$name;
        }

        Dosen::create($data);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryDosen::all();
        $data = Dosen::find($id);
        return view('backend.profiles.dosen.edit', compact('data', 'category'));
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
            'name' => 'required|min:3|string|max:255',
            'category_dosen_id' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5012',
        ]);

        $dosen = Dosen::find($id);

        if ($request->hasFile('image')) {
            $image_path = public_path($dosen->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/dosen');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/dosen/'.$name;
        }

        $dosen->update($data);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $image_path = public_path($dosen->image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus');
    }

    public function category(Request $request)
    {
        $data = $request->validate([
            'jurusan_prodi' => 'required'
        ]);

        CategoryDosen::create($data);

        return redirect()->back()->with('success', 'Jurusan berhasil ditambahkan');
    }

    public function categoryDelete($id)
    {
        CategoryDosen::find($id)->delete();

        return redirect()->back()->with('success', 'Jurusan berhasil dihapus');
    }

}
