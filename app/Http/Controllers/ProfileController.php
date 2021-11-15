<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index($user)
    {
        $user = User::find($user);
        return view('profile',[
            'user' => $user,
        ]);
    }
    
}

