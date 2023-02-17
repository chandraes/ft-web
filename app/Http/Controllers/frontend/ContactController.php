<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class ContactController extends Controller
{
    public function index()
    {
        $data = About::find(1);
        return view('frontend.contact', compact('data'));
    }
}
