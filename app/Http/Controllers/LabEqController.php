<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab\Lab;
use App\Models\Profiles\Dosen;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\Lab\LabEquipment;
use App\Models\Lab\LabEquipmentImage;

class LabEqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lab::select('id', 'name')->get();
        return view('backend.lab.lab-eq.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $dosen = Dosen::select('id', 'name')->get();
        $labId = $id;
        return view('backend.lab.lab-eq.create', compact('dosen', 'labId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'lab_id' => 'required',
            'name' => 'required',
            'eq_image' => 'nullable',
            'eq_image.+.*' => ['image','mimes:jpeg,png','max:10000'],
            'std_pengujian' => 'required',
        ]);

        //get each data[std_pengujian] json into array without key
        $std_pengujian = [];
        foreach (json_decode($data['std_pengujian'], true) as $key => $value) {
            $std_pengujian[] = $value['value'];
        }
        $data['std_pengujian'] = json_encode($std_pengujian, true);

        DB::transaction(function () use ($request, $data) {
            
            $eq = LabEquipment::create([
                'lab_id' => $data['lab_id'],
                'name' => $data['name'],
                'std_pengujian' => $data['std_pengujian'],
            ]);
            
            if ($request->hasFile('eq_image')) {

                foreach ($request->eq_image as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/lab-eq');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['eq_image'] = '/images/lab/lab-eq/'.$name;

                    $eq->labEquipmentImage()->create($data);
                }
            }
        });

        return redirect()->route('lab-equipment')->with('success', 'Data berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lab = Lab::find($id);
        return view('backend.lab.lab-eq.show', compact('lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LabEquipment::find($id);
        $dosen = Dosen::select('id', 'name')->get();
        return view('backend.lab.lab-eq.edit', compact('data', 'dosen'));
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
        // dd($request->all());
        $data = $request->validate([
            'lab_id' => 'required',
            'name' => 'required',
            'eq_image' => 'nullable',
            'eq_image.+.*' => ['image','mimes:jpeg,png','max:10000'],
            'std_pengujian' => 'required',
        ]);

        //get each data[std_pengujian] json into array without key
        $std_pengujian = [];
        foreach (json_decode($data['std_pengujian'], true) as $key => $value) {
            $std_pengujian[] = $value['value'];
        }
        $data['std_pengujian'] = json_encode($std_pengujian, true);

        DB::transaction(function () use ($request, $data, $id) {
            
            $eq = LabEquipment::find($id);
            $eq->update([
                'lab_id' => $data['lab_id'],
                'name' => $data['name'],
                'std_pengujian' => $data['std_pengujian'],
            ]);
            
            if ($request->hasFile('eq_image')) {

                foreach ($request->eq_image as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/lab-eq');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['eq_image'] = '/images/lab/lab-eq/'.$name;

                    $eq->labEquipmentImage()->create($data);
                }
            }
        });

        return redirect()->route('lab-equipment.show', $data['lab_id'])->with('success', 'Data berhasil diubah');
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = LabEquipment::find($id);

        DB::transaction(function () use ($db) {
            if ($db->labEquipmentImage->count() > 0) {
                foreach ($db->labEquipmentImage as $key) {
                    if (File::exists(public_path($key->eq_image))) {
                        File::delete(public_path($key->eq_image));
                    }
                }
            }
            $db->labEquipmentImage()->delete();
            $db->delete();
        });
        
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function deleteImage($id)
    {
        $db = LabEquipmentImage::find($id);

        if (File::exists(public_path($db->eq_image))) {
            File::delete(public_path($db->eq_image));
        }

        $db->delete();
        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }
}
