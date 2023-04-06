<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\File;
use App\Models\Lab\Lab;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Lab\GalleryLab;
use App\Models\Lab\CategoryLab;
use App\Models\Lab\LabTeam;
use App\Models\Profiles\Dosen;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryLab::all();
        $dosen = Dosen::all();
        $data = Lab::paginate(6);
        return view('backend.lab.index', compact('data', 'category', 'dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::select('id', 'name')->get();
        $category = CategoryLab::select('id', 'name')->get();
        return view('backend.lab.create', compact('category', 'dosen'));
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
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category_lab_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kepala_lab' => 'nullable|string|max:255',
            'koordinator_asisten' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable',
            'gallery_image' => 'nullable',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg|max:5120',
            'team_dosen' => 'nullable',
            'team_dosen.*' => 'integer|exists:dosens,id',
        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/lab');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/lab/'.$name;
        }

        DB::transaction(function () use ($request, $data) {

            if ($request->has('team_dosen')) {

                $team = $data['team_dosen'];

                unset($data['team_dosen']);
            }

            $lab = Lab::create($data);

            if ($request->hasFile('gallery_image')) {

                foreach ($request->file('gallery_image') as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/gallery');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['gallery_image'] = '/images/lab/gallery/'.$name;

                    $lab->gallery()->create($data);
                }
            }

            if ($request->has('team_dosen')) {
                foreach ($team as $key => $value) {
                    $lab->team()->create([
                        'dosen_id' => $value
                    ]);
                }
            }
        });

        // Lab::create($data);

        return redirect()->route('lab.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryLab::select('id', 'name')->get();
        $gallery = GalleryLab::where('lab_id', $id)->get();
        $data = Lab::findOrFail($id);
        $dosen = Dosen::select('id', 'name')->get();
        $team = LabTeam::where('lab_id', $id)->get()->pluck('dosen_id')->toArray();
        // dd($team);
        return view('backend.lab.edit', compact('data', 'gallery', 'category', 'dosen'));
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
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category_lab_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'kepala_lab' => 'nullable|string|max:255',
            'koordinator_asisten' => 'nullable|string|max:255',
            'team_dosen' => 'nullable',
            'team_dosen.*' => 'exists:dosens,id',
            'location' => 'nullable|string|max:255',
            'description' => 'nullable',
            'gallery_image' => 'nullable',
            'gallery_image.*' => 'image|mimes:jpeg,png,jpg|max:5120',

        ]);

        $data['slug'] = Str::slug($data['name'], '-');

        $db = Lab::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/lab');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/lab/'.$name;

            if (File::exists(public_path($db->image))) {
                File::delete(public_path($db->image));
            }
        }

        DB::transaction(function () use ($request, $data, $db) {

            if ($request->has('team_dosen')) {

                $team = $data['team_dosen'];

                unset($data['team_dosen']);
            }

            $db->update($data);

            if ($request->hasFile('gallery_image')) {

                foreach ($request->file('gallery_image') as $image) {

                    $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/lab/gallery');
                    $image->move($destinationPath, $name);
                    // unset($data['image']);
                    $data['gallery_image'] = '/images/lab/gallery/'.$name;

                    $db->gallery()->create($data);
                }
            }

            if ($request->has('team_dosen')) {

                $db->team()->delete();

                foreach ($team as $key => $value) {
                    $db->team()->create([
                        'dosen_id' => $value
                    ]);
                }
            }
        });

        return redirect()->route('lab.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Lab::find($id);

        if (File::exists(public_path($db->image))) {
            File::delete(public_path($db->image));
        }

        foreach ($db->gallery as $gallery) {
            if (File::exists(public_path($gallery->gallery_image))) {
                File::delete(public_path($gallery->gallery_image));
            }
        }

        DB::transaction(function () use ($db) {

            $db->gallery()->delete();

            $db->team()->delete();

            $db->delete();

        });

        return redirect()->route('lab.index')->with('success', 'Data berhasil dihapus');
    }

    public function deleteGallery($id)
    {
        $db = GalleryLab::find($id);

        if (File::exists(public_path($db->gallery_image))) {
            File::delete(public_path($db->gallery_image));
        }

        $db->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function category(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CategoryLab::create($data);

        return redirect()->route('lab.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function categoryDelete($id)
    {
        $db = CategoryLab::find($id);

        $db->delete();

        return redirect()->route('lab.index')->with('success', 'Data berhasil dihapus');
    }

    
}
