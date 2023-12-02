<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }



    public function getDetailUser(Request $request){
        $userId = $request->query('id');
        $user = User::find($userId);
        return new UserResource($user);
    }

    public function userUpdate(Request $request,$id){

        $user = User::find($id);
        $data = $request->all();
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);
        $file = $request->file('profile_image');
        $imageNameOri =$file->getClientOriginalName();
        $imageName = $imageNameOri;
        $item = [
            'name'=>$data['name'],
            'email'=>$data['email'],
            'semester'=>$data['semester'],
            'profile_image'=>$imageName,
            'nim'=>$data['nim']
        ];

        $user->update($item);

        return response()->json([
            'message' => 'succes update'
        ], 200);
    }
}
