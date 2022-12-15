<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab\Lab;

class LabController extends Controller
{
    public function index()
    {
        $data = Lab::paginate(9);
        return view('frontend.laboratory.lab', compact('data'));
    }
}
