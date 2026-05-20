<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories= Category::whereNull('parent_id')->with('children')->get();
        $featuredAds= Ad::with(['user', 'category', 'city'])->where('type', 'featured')
            ->latest()->take(6)->get();
        $latestAds= Ad::with(['user', 'category', 'city'])->latest()->take(6)->get();

        return view('index', compact('categories', 'featuredAds', 'latestAds'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function terms()
    {
        return view('terms');
    }

    public function policy()
    {
        return view('policy');
    }

    public function commission()
    {
        return view('commission');
    }
}
