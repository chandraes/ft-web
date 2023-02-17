<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Partner::all();
        return view('backend.partner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'url' => 'nullable|active_url'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partner');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/partner/'.$name;
        }

        Partner::create($data);

        return redirect()->route('partner.index')->with('success', 'Partner berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Partner::find($id);
        return view('backend.partner.edit', compact('data'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'url' => 'nullable|active_url'
        ]);

        $db = Partner::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/partner');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/partner/'.$name;

            $image_old = public_path($db->image);
            if (file_exists($image_old)) {
            //delete image from folder
             File::delete($image_old);
            }
        }

        Partner::find($id)->update($data);

        return redirect()->route('partner.index')->with('success', 'Partner berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Partner::find($id);
        $image_path = public_path($data->image);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $data->delete();
        return redirect()->route('partner.index')->with('success', 'Partner berhasil dihapus');

    }
}
