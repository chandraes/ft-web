<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi\CategoryInformation;
use App\Models\Informasi\Informasi;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryInformation::select('id','name')->get();
        $data = Informasi::join('category_information', 'category_information.id', '=', 'informasis.category_information_id')
            ->select('informasis.*', 'category_information.name as category_name')
            ->get();

        return view('backend.information.index', compact('category', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryInformation::select('id','name')->get();
        return view('backend.information.create', compact('category'));
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
            'category_information_id' => 'required',
            'content' => 'nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/information');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/information/'.$name;
        }

        Informasi::create($data);
        return redirect()->route('informasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Informasi::find($id);

        $image_path = public_path($data->image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $data->delete();

        return redirect()->route('informasi.index')->with('success', 'Data berhasil dihapus');
    }
}
