<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTask;
use App\Models\User;



class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }   

    public function index(){
        $NewTask = NewTask::paginate(2);
        return view('dashboard',[
            'NewTask'=> $NewTask,
        ]);
        
    }
    
}
