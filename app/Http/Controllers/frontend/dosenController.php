<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Dosen;
use App\Models\Profiles\CategoryDosen;

class dosenController extends Controller
{
    public function index()
    {
        $category = CategoryDosen::all();
        $dosens = Dosen::join('category_dosens', 'category_dosens.id', '=', 'dosens.category_dosen_id')
                        ->select('dosens.*', 'category_dosens.jurusan_prodi as jurusan_prodi')
                        ->get();
        return view('frontend.dosen.index', compact('dosens', 'category'));
    }

    public function detail($id)
    {
        $dosen = Dosen::join('category_dosens', 'category_dosens.id', '=', 'dosens.category_dosen_id')
                                        ->select('dosens.*', 'category_dosens.jurusan_prodi as jurusan_prodi')->findOrFail($id);
        return view('frontend.dosen.detaildos', compact('dosen'));
    }

    public function category($id)
    {
        $category = CategoryDosen::findOrFail($id);
        $dosens = Dosen::join('category_dosens', 'category_dosens.id', '=', 'dosens.category_dosen_id')
                        ->select('dosens.*', 'category_dosens.jurusan_prodi as jurusan_prodi')
                        ->where('category_dosens.id', $id)
                        ->get();
        return view('frontend.dosen.category', compact('dosens', 'category'));
    }
}
