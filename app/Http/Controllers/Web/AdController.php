<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::whereNull('parent_id')->with('children')->get();
        $cities = City::all();

    $query = Ad::with(['user', 'category', 'city']);

    if ($request->name)
        {
            $query->where('title_ar', 'like', '%' . $request->name . '%');
        }

    if ($request->city_id) {
        $query->where('city_id', $request->city_id);
    }

    if ($request->min_price)
        {
            $query->where('price', '>=', $request->min_price);
        }
    if ($request->max_price)
        {
            $query->where('price', '<=', $request->max_price);
        }

        $ads = $query->latest()->paginate(9);

        return view('ads', compact('ads', 'categories', 'cities'));
    }

    public function show($id)
    {
        $ad = Ad::with(['user', 'category', 'city'])->findOrFail($id);

        $relatedAds = Ad::with(['user', 'category', 'city'])
                    ->where('category_id', $ad->category_id)
                    ->where('id', '!=', $ad->id)
                    ->latest()
                    ->take(5)
                    ->get();

    return view('ad_details', compact('ad', 'relatedAds'));
    }

    public function create()
    {
        $categories= Category::whereNull('parent_id')->get();
            $cities= City::all();
                return view('add_ad', compact('categories', 'cities'));
    }

    public function categories()
    {
        $categories= Category::whereNull('parent_id')
            ->with('children')->get();
                return view('categories', compact('categories'));
    }

    public function search(Request $request)
    {
        $query= Ad::with(['user', 'category', 'city']);

            if($request->q)
                {
                    $query->where('title_ar', 'like', '%' . $request->q . '%')
                        ->orwhere('title_en', 'like', '%' . $request->q . '%');
                }

                $ads= $query->latest()->paginate(10);
                return view('search', compact('ads'));
    }
    public function profile()

    {
        return view ('profile');
    }
}
