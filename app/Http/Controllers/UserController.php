<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getMsg() {
        return response()->json([ 'msg' => 'Success' ]);
    }

    public function getAll() {
        $users = User::all();
        return $users;
    }

    public function showAll() {
        $users = User::all();
        return view('user', ['users' => $users]);
    }
}
