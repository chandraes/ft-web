<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Dosen;

class dosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::join('category_dosens', 'category_dosens.id', '=', 'dosens.category_dosen_id')
                        ->select('dosens.*', 'category_dosens.jurusan_prodi as jurusan_prodi')
                        ->get();
        return view('frontend.dosen.index', compact('dosens'));
    }

    public function detail($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('frontend.dosen.detaildos', compact('dosen'));
    }
}
