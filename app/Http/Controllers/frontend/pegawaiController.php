<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Pegawai;
use App\Models\Profiles\CategoryDosen;

class pegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        $category = CategoryDosen::all();
        return view('frontend.pegawai.index', compact('pegawais', 'category'));
    }

    public function category($id)
    {
        $category = CategoryDosen::findOrFail($id);
        $pegawais = Pegawai::where('category_dosens_id', $id)->get();
        return view('frontend.pegawai.category', compact('pegawais', 'category'));
    }

    public function detail($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('frontend.pegawai.detailpeg', compact('pegawai'));
    }
}
