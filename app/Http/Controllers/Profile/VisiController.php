<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Visi;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visi = Visi::all();

        return view('backend.profiles.visi.index', compact('visi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.profiles.visi.create');
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
            'visi' => 'required',
            'is_active' => 'nullable'
        ]);

        if ($data['is_active'] == "on") {
            Visi::where('is_active', 1)->update(['is_active' => 0]);
        }

        $data['is_active'] = $data['is_active'] == "on" ? 1 : 0;
        // dd($data);
        Visi::create($data);

        return redirect()->route('visi.index')->with('success', 'Visi & Misi berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visi = Visi::findOrFail($id);

        return view('backend.profiles.visi.edit', compact('visi'));
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
            'visi' => 'required',
            'is_active' => 'nullable'
        ]);

        if ($data['is_active'] == "on") {
            Visi::where('is_active', 1)->update(['is_active' => 0]);
            $data['is_active'] = $data['is_active'] == "on" ? 1 : 0;
        }

        Visi::where('id', $id)->update($data);

        return redirect()->route('visi.index')->with('success', 'Visi & Misi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visi::findOrFail($id)->delete();

        return redirect()->route('visi.index')->with('success', 'Visi & Misi berhasil dihapus');
    }
}
