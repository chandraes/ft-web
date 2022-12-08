<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi\Informasi;
use App\Models\Informasi\CategoryInformation;

class InformationController extends Controller
{
    public function index($id, $name)
    {
        $information = Informasi::where('category_information_id', $id)->paginate(5);
        // dd($information);
        return view('frontend.information.index', compact('information'));
    }
}
