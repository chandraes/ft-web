<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Pegawai;


class pegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('frontend.pegawai.index', compact('pegawais'));
    }

    public function detail($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('frontend.pegawai.detailpeg', compact('pegawai'));
    }
}
