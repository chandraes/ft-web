<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Informasi\Informasi;
use App\Models\Partner;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $carousels = Carousel::all();
        $news = Informasi::select('id','title', 'image', 'content', 'created_at')->latest()->take(3)->get();
        // dd($news);
        // $categoryInformation = CategoryInformation::all();
        return view('frontend.home', compact('carousels', 'news'));
    }
}
