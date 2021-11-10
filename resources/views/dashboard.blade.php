@extends('layouts.side')

@section('content')

        <br>
        <br>
        <div class="flex justify-center" style="position: relative;left:50px">
            <div class="w-2/3 bg-gray-200 p-6 rounded-lg">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="profile" class="profile mr-4" style="height: 120px; width: 120px;">
                            <h1 class="h2">{{auth()->user()->name}}</h1>
                        </div>
                            <div class="d-flex ms-auto mb-auto">
                                <a href="{{route('settings')}}" role="button" class="btn bg-danger rounded-pill">
                                    Edit Profile    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="container"style="position: relative;left:50px">
   <div class="d-flex justify-content-around mt-5 mb-5">
       <a href="{{route('alltask')}}" class="btn btn-secondary" role="button" id="all" style="width: 8%;" style="a:hover="red"">All</a>
       <a href="" class="btn btn-secondary" role="button" id="progress" style="width: 8%;">In Progress</a>
       <a href="" class="btn btn-secondary" role="button" id="complete" style="width: 8%;">Completed</a>
   </div>

@endsection