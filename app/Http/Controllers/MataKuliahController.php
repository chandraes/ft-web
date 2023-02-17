<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen\MataKuliah;
use Illuminate\Support\Str;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = MataKuliah::select('id', 'kode', 'name')
                ->when($request->has('keyword'), function ($query) use ($request) {
                    $query->where('name', 'like', "%{$request->keyword}%")
                        ->orWhere('kode', 'like', "%{$request->keyword}%");
                })->paginate(10);
        return view('backend.matakuliah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.matakuliah.create');
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
            'kode' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        MataKuliah::create($data);

        return redirect()->route('mata-kuliah.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MataKuliah::findOrFail($id);
        return view('backend.matakuliah.edit', compact('data'));
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
            'kode' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        MataKuliah::findOrFail($id)->update($data);

        return redirect()->route('mata-kuliah.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliah::findOrFail($id)->delete();
        return redirect()->route('mata-kuliah.index')->with('success', 'Data berhasil dihapus');
    }

}
