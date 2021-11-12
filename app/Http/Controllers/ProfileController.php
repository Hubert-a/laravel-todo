<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Provider\Image;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    public function store(Request $request){
        $this->validate($request,[
            'avatar'=>'required|image'
        ]);
        

        dd(request()->all());
}

        //   if($request->hasFile('avatar')){
        //       $avatar = $request->file('avatar');
        //       $filename=time(). '.' . $avatar->getClientOriginalExtension(); 
        //       Image::make($avatar)->resize(300,300)->save(public_path(''.$filename));

        //       $user = Auth::user();
        //       $user->avatar = $filename;
        //       $user->save();
        //   };
}

