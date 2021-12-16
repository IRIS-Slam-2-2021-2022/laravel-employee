<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.store');
    }

    public function store(Request $request, StoreUserRequest $storeUserRequest)
    {
        if ($storeUserRequest->validated()) {
            $user = new User();
            $user->fill($storeUserRequest->all());
            $user->password = bcrypt($storeUserRequest->get('password'));
            $user->save();

            return view('user.success', ['user' => $user]);
        } else {
            redirect('/user/create');
        }
    }
}
