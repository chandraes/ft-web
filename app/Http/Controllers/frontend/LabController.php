<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab\Lab;
use App\Models\Lab\CategoryLab;
use App\Models\Lab\GalleryLab;

class LabController extends Controller
{
    public function index()
    {
        $category = CategoryLab::select('id', 'name')->get();
        $data = Lab::leftJoin('category_labs', 'category_labs.id', 'labs.category_lab_id')
                ->select('labs.*', 'category_labs.name as category_name')
                ->get();

        return view('frontend.laboratory.lab', compact('data', 'category'));
    }

    public function detail($id)
    {
        $data = Lab::find($id);
        // dd($data->dosen);
        return view('frontend.laboratory.detail', compact('data'));
    }
}
