<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Returns current authenticated user
     *
     * @param Request $request
     * @return Response 
     */
    public function getUser(Request $request){
        $user = User::find(1);
        return response()->json(new UserResource($user));
    }
}
