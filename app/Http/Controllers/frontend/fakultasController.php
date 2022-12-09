<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Fakultas;

class fakultasController extends Controller
{
    public function index()
    {
        $fakultass = Fakultas::where('is_active', 1)->get();
        // dd($fakultass);
        return view('frontend.fakultas', compact('fakultass'));
    }
}
