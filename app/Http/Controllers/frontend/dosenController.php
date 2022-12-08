<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Dosen;

class dosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('frontend.dosen.index', compact('dosens'));
    }

    public function detail($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('frontend.dosen.detaildos', compact('dosen'));
    }
}
