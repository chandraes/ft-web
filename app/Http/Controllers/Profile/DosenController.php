<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Dosen;
use App\Models\Profiles\CategoryDosen;
use App\Models\Dosen\MataKuliah;
use Illuminate\Support\Facades\File;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

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
            'nip_nidn' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'research_interest' => 'nullable|string|max:255',
            'category_dosen_id' => 'required|exists:category_dosens,id',
            'mata_kuliah_id' => 'nullable',
            'mata_kuliah_id.*' => 'integer|exists:mata_kuliahs,id',
            'gs_link' => 'nullable|active_url',
            'scopus_link' => 'nullable|active_url',
            'sinta_link' => 'nullable|active_url',
            'wos_link' => 'nullable|active_url',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:5012',
            'pangkat' => 'nullable|string|max:255',
            'jabfung' => 'nullable|string|max:255',
        
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = Uuid::uuid4()->toString() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/dosen');
            $image->move($destinationPath, $name);
            $data['image'] = '/images/dosen/'.$name;
        }

        DB::transaction(function () use ($data, $request) {
            if ($request->has('mata_kuliah_id')) {
                $mk_dosen = $data['mata_kuliah_id'];
                unset($data['mata_kuliah_id']);
            }

            if($request->has('research_interest')) {
                $tags = $data['research_interest'];
                $tags = explode(',', $data['research_interest']);
                unset($data['research_interest']);
            }

            $dosen = Dosen::create($data);

            if ($request->has('jenjang_pendidikan')) {
                for($i = 0; $i < count($request->jenjang_pendidikan); $i++) {
                    $dosen->riwayat_pendidikan()->create([
                        'jenjang_pendidikan' => $request->jenjang_pendidikan[$i],
                        'program_studi' => $request->program_studi[$i],
                        'tempat_pendidikan' => $request->tempat_pendidikan[$i],
                        'tahun_lulus' => $request->tahun_lulus[$i],
                    ]);
                }
            }

            if($request->has('judul')){
                for($i = 0; $i < count($request->judul); $i++) {
                    $dosen->tugas_lab()->create([
                        'tahun' => $request->tahun[$i],
                        'judul' => $request->judul[$i],
                        'spesialisasi' => $request->spesialisasi[$i],
                        'capaian' => $request->capaian[$i],
                    ]);
                }
            }

            if ($request->has('mata_kuliah_id')) {
                foreach ($mk_dosen as $key => $value) {
                    $dosen->mk_dosen()->create([
                        'mata_kuliah_id' => $value
                    ]);
                }
            }

            if ($request->has('research_interest')) {
                foreach ($tags as $key => $value) {
                    $dosen->research_interest()->create([
                        'name' => $value
                    ]);
                }
            }

        });

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
            'nip_nidn' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'research_interest' => 'nullable|string|max:255',
            'category_dosen_id' => 'required|exists:category_dosens,id',
            'mata_kuliah_id' => 'nullable',
            'mata_kuliah_id.*' => 'integer|exists:mata_kuliahs,id',
            'gs_link' => 'nullable|active_url',
            'scopus_link' => 'nullable|active_url',
            'sinta_link' => 'nullable|active_url',
            'wos_link' => 'nullable|active_url',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5012',
            'pangkat' => 'nullable|string|max:255',
            'jabfung' => 'nullable|string|max:255',
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


        DB::transaction(function () use ($data, $dosen, $request) {

            if ($request->has('mata_kuliah_id')) {
                $mk_dosen = $data['mata_kuliah_id'];
                unset($data['mata_kuliah_id']);
                $dosen->mk_dosen()->delete();
            }

            if ($request->has('research_interest')) {
                $tags = $data['research_interest'];
                $tags = explode(',', $data['research_interest']);
                $dosen->research_interest()->delete();
                foreach ($tags as $key => $value) {
                    $dosen->research_interest()->create([
                        'name' => $value
                    ]);
                }
                unset($data['research_interest']);
            }

            $dosen->update($data);

            if ($request->has('jenjang_pendidikan')) {
                $dosen->riwayat_pendidikan()->delete();
                for($i = 0; $i < count($request->jenjang_pendidikan); $i++) {
                    $dosen->riwayat_pendidikan()->create([
                        'jenjang_pendidikan' => $request->jenjang_pendidikan[$i],
                        'program_studi' => $request->program_studi[$i],
                        'tempat_pendidikan' => $request->tempat_pendidikan[$i],
                        'tahun_lulus' => $request->tahun_lulus[$i],
                    ]);
                }
            }

            if($request->has('judul')){

                $dosen->tugas_lab()->delete();
                for($i = 0; $i < count($request->judul); $i++) {
                    $dosen->tugas_lab()->create([
                        'tahun' => $request->tahun[$i],
                        'judul' => $request->judul[$i],
                        'spesialisasi' => $request->spesialisasi[$i],
                        'capaian' => $request->capaian[$i],
                    ]);
                }
            }

            if ($request->has('mata_kuliah_id')) {
                foreach ($mk_dosen as $key => $value) {
                    $dosen->mk_dosen()->create([
                        'mata_kuliah_id' => $value
                    ]);
                }
            }
        });

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

        DB::transaction(function () use ($dosen) {
            $dosen->riwayat_pendidikan()->delete();
            $dosen->mk_dosen()->delete();
            $dosen->research_interest()->delete();
            $dosen->tugas_lab()->delete();
            $dosen->delete();
        });
        


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

    public function mk_search(Request $request)
    {

        if ($request->ajax()) {

            $mk = MataKuliah::where('name', 'LIKE', '%' . $request->q . "%")->orWhere('kode', 'LIKE', '%'.$request->q.'%')->get();
            if ($mk) {
                return response()->json(['mk' => $mk]);
            }
        }
    }

}
