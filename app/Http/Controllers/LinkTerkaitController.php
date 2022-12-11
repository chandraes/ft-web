<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LinkTerkait;

class LinkTerkaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LinkTerkait::all();
        return view('backend.link-terkait.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.link-terkait.create');
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
            'link' => 'required|active_url'
        ]);

        LinkTerkait::create($data);

        return redirect()->route('link-terkait.index')->with('success', 'Link Terkait berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LinkTerkait::findOrFail($id);
        return view('backend.link-terkait.edit', compact('data'));
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
            'link' => 'required|active_url'
        ]);

        LinkTerkait::findOrFail($id)->update($data);

        return redirect()->route('link-terkait.index')->with('success', 'Link Terkait berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LinkTerkait::findOrFail($id)->delete();
        return redirect()->route('link-terkait.index')->with('success', 'Link Terkait berhasil dihapus');
    }
}
