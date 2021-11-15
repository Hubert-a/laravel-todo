<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTask;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $NewTask = NewTask::get();    
        return view('dashboard',[
            'NewTask'=> $NewTask
        ]);
        
    }
}
