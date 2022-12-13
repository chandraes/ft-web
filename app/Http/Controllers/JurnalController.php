<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use Mews\Purifier\Facades\Purifier;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jurnal::all();

        return view('backend.jurnal.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jurnal.create');
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
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'content' => 'nullable'
        ]);

        if (!empty($data['content'])) {
            Purifier::clean($data['content']);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/jurnal');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/jurnal/'.$name;
        }

        // dd($data);

        Jurnal::create($data);

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil ditambahkan');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Jurnal::find($id);

        return view('backend.jurnal.edit', compact('data'));
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
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'content' => 'nullable'
        ]);

        $jurnal = Jurnal::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/jurnal');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/jurnal/'.$name;

            if (File::exists(public_path($jurnal->image))) {
                File::delete(public_path($jurnal->image));
            }
        }

        $jurnal->update($data);

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurnal = Jurnal::find($id);

        if (File::exists(public_path($jurnal->image))) {
            File::delete(public_path($jurnal->image));
        }

        $jurnal->delete();

        return redirect()->route('jurnal.index')->with('success', 'Jurnal berhasil dihapus');
    }
}
