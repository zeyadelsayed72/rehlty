<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\AdResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user= auth('api')->user();

        return new UserResource($user);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user= auth('api')->user();

        if($request->hasFile('avatar'))
            {
                if($user->avatar)
                    {
                        Storage::disk('public')->delete($user->avatar);
                    }
                $user->avatar= $request->file('avatar')->store('avatars', 'public');
            }

            $user->update($request->validated());

            return response()->json([
                'message'=> ' profile updated successfully',
                'user'=> new UserResource($user),
            ]);
    }

    public function myAds()
    {
        $ads= auth('api')->user()->ads()
            ->with(['category', 'city'])
            ->latest()
            ->paginate(10);

        return AdResource::collection($ads);
    }

    public function destroy()
    {
        $user= auth('api')->user();

        if($user->avatar)
            {
                Storage::disk('public')->delete($user->avatar);
            }

        $user->delete();

        return response()->json([
            'message'=> 'account has been successfully deleted',
        ]);
    }
}
