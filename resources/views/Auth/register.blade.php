@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 bg-danger">
    <div class="container ">
        <div class="text-center">
            <img src="{{asset('assets/images/logo.png')}}" alt="" class="align-items-baseline"style="width: 70%; height:70%" >
        </div>
                <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                <pre class="text-center text-white">Overwhelmed by your daily tasks?
Get them under controll with todolist!</pre>
        </div> 

    </div>
    <div class="col-md-6 bg-light">
        <div class="container">
                <h3 class="mt-5">Get Started...</h3>
                <p class="mb-5"><small>Already have an account? <a href="{{route('login')}}" class="text-danger ms-1"  style="text-decoration: none;">Login</a></small></p>
                <p class="h4 text-center mb-3">Register Now</p>
                <p class="text-center mb-4">Please enter your details below to continue</p>

                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') border-danger @enderror" name="name" id="name" placeholder="Full Name/Username" value="{{old('name')}}" >

                        @error('name')
                            <div class="text-danger mt-2 text-sm">
                                {{$message}}
                            </div>
                            
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control @error('email') border-danger @enderror" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                        @error('email')
                            <div class="text-danger mt-2 text-sm">
                                {{$message}}
                            </div>
                            
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('name') border-danger @enderror" name="password" id="password" placeholder="Password" >
                            {{-- <span>
                                <img src="../assets/images/view.png" alt="view" class="view fa" onclick="toggle()">
                            </span> --}}
                            @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{$message}}
                            </div>
                            
                        @enderror
                    </div>
                
                       
                    <div class="form-floating mb-5">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" >
                        {{-- <span>
                            <img src="../assets/images/view.png" alt="view" class="view fa" onclick="toggle()">
                        </span> --}}
                    </div>
                    <div class="d-grid gap-2 mb-5">
                        <button type="submit" name="submit" class="btn btn-danger rounded-pill btn-block">REGISTER</button>
                    </div>
                </form>    

        
        
        </div>
    </div>
</div>
@endsection