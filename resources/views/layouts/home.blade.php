<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
        @yield('content')
    </body>
</html>