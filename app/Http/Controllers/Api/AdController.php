<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;
use App\Http\Resources\AdResource;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    public function index()
    {
        $ads = Ad::with(['user', 'category', 'city'])
            ->latest()->paginate(10);
        return AdResource::collection($ads);
    }


    public function store(StoreAdRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('ads', 'public');
        }

        $data['user_id'] = auth('api')->id();


        $data['show_price'] = $data['show_price'] ?? true;
        $data['type']       = $data['type'] ?? 'normal';


        $ad = Ad::create($data);

        return response()->json([
            'message' => 'تم اضافة الاعلان بنجاح',
            'ad' => new AdResource($ad),
        ], 201);
    }


    public function show($id)
    {
        $ad = Ad::with(['user', 'category', 'city'])
            ->findOrFail($id);
        return new AdResource($ad);
    }


    public function update(UpdateAdRequest $request, $id)
    {
        $ad = Ad::findOrFail($id);

        if ($ad->user_id !== auth('api')->id()) {
            return response()->json([
                'message' => 'مش مسموح ليك تعدل الاعلان دا'
            ], 403);
        }

        $data = $request->validated();

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($ad->image);
            $data['image'] = $request->file('image')->store('ads', 'public');
        }

        $ad->update($data);

        return response()->json([
            'message' => 'تم تعديل الاعلان بنجاح',
            'ad' => new AdResource($ad),
        ]);
    }


    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);

        if ($ad->user_id !== auth('api')->id()) {
            return response()->json([
                'message' => 'مش مسمو ليك تمسح الاعلان ',
            ], 403);
        }

        Storage::disk('public')->delete($ad->image);
        $ad->delete();

        return response()->json([
            'message' => 'تم حذف الاعلان بنجاح'
        ]);
    }
}
