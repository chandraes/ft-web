<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Informasi\Informasi;
use App\Models\Partner;
use App\Models\About;


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
        $about = About::find(1);
        // dd($news);
        // $categoryInformation = CategoryInformation::all();
        return view('frontend.home', compact('carousels', 'news', 'about'));
    }
}
