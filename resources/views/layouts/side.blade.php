<!DOCTYPE>
<html lang="en">
    <head>
        <title>sidebar</title>
        <link rel="stylesheet" href="/fontawesome/css/all.min.css"> 
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
                 *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body{
                    position: relative;
                    min-height: 100vh;
                    width:100%;
                    overflow: hidden;
                    font-family: sans-serif;
                    background:rgb(216, 216, 216)
                }

                .sidebar{
                    position: fixed;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 78px;
                    background: rgba(223, 0, 0, 0.842);
                    padding: 6px 14px;
                    transition: all 0.5s ease;
                }
                .sidebar.active{
                    width: 240px;

                }
                .sidebar .logo_content .logo{
                    color:fff;
                    display: flex;
                    height: 50px;
                    width: 100%;
                    align-items: center;
                    opacity: 0;
                    pointer-events: none;
                    transition: all 0.5s ease;

                }
                .sidebar.active .logo_content .logo{
                    opacity: 1; 
                    pointer-events: none; 
                }

                .logo_content .logo i{
                    font-size: 28px;
                    margin-right: 5px;
                }

                .logo_content .logo .logo_name{
                    font-size: 20px;
                    font-weight: 400;
                }

                .sidebar #btn{
                    position: absolute;
                    color: fff;
                    top: 6px;
                    left: 50%;
                    font-size: 20px;
                    height: 50px;
                    width: 50px;
                    text-align: center;
                    line-height: 50px;
                    transform: translateX(-50%);
                }
                .sidebar.active #btn{
                    left: 90%;

                }
                .sidebar ul{
                    margin-top: 20px;
                }

                .sidebar ul li{
                    height: 50px;
                    width: 100%;
                    list-style: none;
                    position: relative;
                    margin: 0 5px;
                    line-height: 50px;
                }
                .sidebar ul li .tooltip{
                    position: absolute;
                    height: 35px;
                    left: 122px;
                    top: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: 6px;
                    width:122px;
                    line-height: 35px;
                    text-align: center;
                    background:#fff;
                    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
                    transition: 0s;
                    opacity: 0;
                    pointer-events: none;
                    display: block;
                }
                .sidebar.active ul li .tooltip{
                    display: none;
                }
                .sidebar .links_name{
                    opacity: 0;
                    pointer-events: none;
                    transition: all 0.5s ease;
                }
                .sidebar.active .links_name{
                    opacity: 1;
                    pointer-events: auto;

                }
                .sidebar ul li:hover .tooltip{
                    transition: all 0.5s ease;
                    opacity: 1;
                    top: 50%;
                }

                .sidebar ul li a{
                    color: fff;
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    border-radius: 12px;
                    white-space: nowrap;
                }
                .sidebar ul li a:hover{
                    color: rgba(223, 0, 0, 0.842);
                    background:#fff;
                }
                .sidebar ul li a i{
                    height: 50px;
                    min-width: 50px;
                    border-radius: 12px;
                    line-height: 50px;
                    text-align: center;
                }
                .sidebar .profile_content{
                    position: absolute;
                    color: fff;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                }
                .sidebar .profile_content .profile{
                    position: relative;
                    padding: 10px 6px;
                    height: 60px;
                    background:rgba(250, 56, 56, 0.842);
                    transition: all 0.4s ease;
                }
                .sidebar.active .profile_content .profile{
                    background:none;
                }
                .profile_content .profile .profile_details{
                    display: flex;
                    align-items: center;
                    opacity: 0;
                    pointer-events: none;
                    white-space: nowrap;
                }
                .sidebar.active .profile .profile_details{
                    opacity: 1;
                    pointer-events: auto;
                }
                .profile .profile_details img{
                    height: 45px;
                    width: 45px;
                    object-fit: cover;
                    border-radius: 12px;
                }
                .profile .profile_details .name_job{
                    margin-left: 10px;
                }
                .profile .profile_details .name{
                    font-size: 15px;
                    font-weight: 400;
                }
                .profile .profile_details .job{
                    font-size: 12px;
                }
                .profile #log_out{
                    position: absolute;
                    left: 50%;
                    bottom: 5px;
                    transform: translateX(-50%);
                    min-width: 50px;
                    line-height: 50px;
                    font-size: 20px;
                    border-radius: 12px;
                    text-align: center;
                    background: none;
                    transition: all 0.4s ease;
                }
                .sidebar.active .profile #log_out{
                    left: 88%;
                }
                .sidebar.active .profile #log_out{
                    background:rgba(250, 56, 56, 0.842);
                }
                
                #all.active{
                    color: red
                }
                

                .sidebar.active ~ .home_content{
                    left: 240px;
                    width: calc(100%-240px);
                }
        </style>
    </head>
    <body>
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