<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Laravel</title>

        <style>
            #all:active{
                color: red;
            }
            #progress:active{
                color: yellow;
            }
            #complete:active{
                color: green;
            }
        </style>
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-danger flex justify-between mb-6">
            <ul class="flex items-center">
                <li class="text-white">
                    <a href="{{route('dashboard')}}"class="p-3" style="text-decoration:none">Dashboard</a>
                </li>
                <li class="text-white">
                    <a href="{{route('NewTask')}}" class="p-3" style="text-decoration:none">New Task</a>
                </li>
                <li class="text-white">
                    <a href=""class="p-3" style="text-decoration:none">Collection</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @auth
                    <li class="text-white">
                        <a href="" class="p-3" style="text-decoration:none">{{auth()->user()->name}}</a>
                    </li>
                    <li class="text-white">
                        <a href="" class="p-3" style="text-decoration:none">Profile</a>
                    </li>
                    <li class="text-white">
                        <a href="" class="p-3" style="text-decoration:none">Settings</a>
                    </li>
                    <li class="text-white">
                        <form action="{{route('logout')}}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth
                {{-- @guest
                    <li>
                        <a href=""class="p-3" style="text-decoration:none">Login</a>
                    </li>
                    <li>
                        <a href=""class="p-3" style="text-decoration:none">Regitser</a>
                    </li>
                @endguest --}}
            
                    
                
            </ul> 

        </nav>
        <div class="flex justify-center">
            <div class="w-10/12 bg-white p-6 rounded-lg">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="profile" class="profile mr-4" style="height: 120px; width: 120px;">
                            <h1 class="h2">{{auth()->user()->name}}</h1>
                    </div>
                        <div class="d-flex ms-auto mb-auto">
                            <a href="" role="button" class="btn bg-danger rounded-pill">
                                Edit Profile    
                            </a>
                        </div>
                    </div>
                    
                {{-- @if ($NewTask->count())
                    @foreach($NewTask as $NewTask)
                        <div class="mb-4">
                            <p class="mb-2">{{$NewTask->body}}</p><span class="text-gray-600 text-sm">
                               {{$NewTask->created_at->diffForHumans()}} 
                            </span>
                            <form action="{{route('NewTask.destroy',$NewTask)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <Button type="submit" class="text-danger">Delete</Button>
                            </form>
                        </div>
                    @endforeach
                    
                @else
                    <p>No Task Available</p>
                @endif --}}
            </div>
            
        
        </div>
        <div class="d-flex justify-content-around mt-5 mb-5">
            <a href="{{route('alltask')}}" class="btn btn-secondary" role="button" id="all" style="width: 8%;" style="a:hover="red"">All</a>
            <a href="" class="btn btn-secondary" role="button" id="progress" style="width: 8%;">In Progress</a>
            <a href="" class="btn btn-secondary" role="button" id="complete" style="width: 8%;">Completed</a>
        </div>
        @yield('content')
    </body>
</html>