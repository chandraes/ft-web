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
        return view('frontend.information.index', compact('information'));
    }

    public function detail($id)
    {
        $information = Informasi::find($id);
        return view('frontend.information.detail', compact('information'));
    }

    public function search(Request $request)
    {
        $keyword = $request->validate([
            'keyword' => 'required|min:1|string|max:255'
        ]);

        $information = Informasi::whereFullText('title', $keyword)->paginate(5);

        return view('frontend.information.index', compact('information'));
    }
}
