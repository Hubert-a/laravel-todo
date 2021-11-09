<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTask;


class AllController extends Controller
{
    public function index(){
        $NewTask = NewTask::get();    
        return view('all',[
            'NewTask'=> $NewTask

        ]);

    }
}
