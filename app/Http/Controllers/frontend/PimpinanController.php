<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Pimpinan;

class PimpinanController extends Controller
{
    public function index()
    {
        $pimpinans = Pimpinan::all();
        return view('frontend.pimpinan', compact('pimpinans'));
    }

}
