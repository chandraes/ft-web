<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profiles\Visi;

class visimisiController extends Controller
{
    public function index()
    {
        $visis = Visi::where('is_active', 1)->get();
        // dd($visis);
        return view('frontend.visimisi', compact('visis'));
    }
}
