<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Informasi\Informasi;
use App\Models\Partner;
use App\Models\About;
use App\Models\Lab\CategoryLab;
use App\Models\Lab\Lab;
use App\Models\Profiles\Dosen;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lab = Lab::take(6)->get();

        $category = CategoryLab::select('id', 'name')->get();
        $carousels = Carousel::all();
        $news = Informasi::select('id','title', 'image', 'slug' ,'content', 'created_at')->latest()->take(3)->get();
        $about = About::find(1);
        $count_dosen = Dosen::count();
        $count_lab = Lab::count();

        return view('frontend.home', compact('carousels', 'news', 'about', 'category', 'lab', 'count_dosen', 'count_lab'));
    }
}
