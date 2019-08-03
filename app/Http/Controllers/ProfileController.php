<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);
        return view('profile', [
            'user' => $user,
        ]);
    }
}
