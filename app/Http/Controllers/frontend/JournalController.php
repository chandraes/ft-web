<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurnal;

class JournalController extends Controller
{
    public function index()
    {
        $data = Jurnal::paginate(5);

        return view('frontend.journal.index', compact('data'));
    }
}
