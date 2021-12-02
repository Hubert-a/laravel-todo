<!DOCTYPE>
<html lang="en">
    <head>
        <title>MyDay</title>
        <link rel="stylesheet" href="/fontawesome/css/all.min.css"> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="/pcss/side.css">
    </head>
    <body>
        <div class="loader-bg">
            <div class="loader h3 ">a moment...</div>
        </div>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <div class="logo_name">TODO</div>
                </div>
                <i class="fas fa-ellipsis-h" id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="{{route('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="{{route('NewTask')}}">
                    <i class="fas fa-plus"></i>
                    <span class="links_name">Create New Tasks</span>
                    </a>
                    <span class="tooltip">Create New Tasks</span>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-folder-open"></i>
                    <span class="links_name">Add a Collection</span>
                    </a>
                    <span class="tooltip">Add a Collection</span>
                </li>
                <li>
                    <a href="">
                    <i class="fas fa-user"></i>
                    <span class="links_name">View Profile</span>
                    </a>
                    <span class="tooltip">View Profile</span>
                </li>
                <li>
                    <a href="{{route('settings')}}">
                    <i class="fas fa-cog"></i>
                    <span class="links_name">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="./assets/images/avatar.png" alt="profile">
                        <div class="name_job">
                            <div class="name">{{auth()->user()->name}}</div>
                        </div>
                    </div>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button><i class="fas fa-sign-out-alt" id="log_out"></i></button>
                    </form>
                </div>
            </div>
        </div>
       
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>

        <script>
            setTimeout(function() {
                $('.loader-bg').toggle();
            }, 1500 );
        </script>

        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");

            btn.onclick = function(){
                sidebar.classList.toggle("active");
            }
        </script>
        @yield('content')
    </body>
</html>