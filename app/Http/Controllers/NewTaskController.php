<?php

namespace App\Http\Controllers;

use App\Models\NewTask;
use Illuminate\Http\Request;

class NewTaskController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index(){
        // dd(auth()->user()->NewTask);
        
        return view('NewTask');
            
    }

    public function store(Request $request){
        $this->validate($request,[
            'body'=>'required'

        ]);
        $request->user()->NewTask()->create($request->only('body','status'));
        return redirect()->route('dashboard');
    }
    public function destroy(NewTask $NewTask){
        $NewTask->delete();
        return redirect()->route('dashboard');
    }
}
