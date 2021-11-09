@extends('layouts.app')

@section('content')
<body>
        <div class="row">
            <div class="col-md-6 bg-danger">
                <div class="text-center">
                    <img src="/images/logo.png" alt="" class="align-items-baseline"style="width: 70%; height:70%" >
                </div>
                <div class="container ">
                        <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                        <pre class="text-center text-white">Overwhelmed by your daily tasks?
 Get them under controll with todolist!</pre>
                </div> 
            </div>

            <div class="col-md-6 bg-light">
                <div class="container">
                    <h3 class="mt-5">Get Started...</h3>
                    <p class="mb-5"><small>Don’t have an account? <a href="{{route('register')}}" class="text-danger ms-2"  style="text-decoration: none;">Register</a></small></p>

                    <p class="h4 text-center mb-3">Login Now</p>
                    <p class="text-center mb-4">Please enter your details below to continue</p>
                    @if (session('status'))
                        <div class="bg-danger p-4 rounded mb-6 text-white text-center">
                            {{session('status')}}
                        </div>
                    @endif
                    
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="Email" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="Email" aria-describedby="emailHelp" >
                          @error('email')
                          <div class="text-danger mt-2 text-sm">
                              {{$message}}
                          </div>
                              
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') border-danger @enderror" id="password">
                                @error('password')
                                    <div class="text-danger mt-2 text-sm">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" name="remember"class="form-check-input" id="remember">
                          <label class="form-check-label" for="remember">Remeber me</label>
                        </div>
                        <button type="submit" class="btn btn-danger">Login</button>


                        {{-- <button type="button" class="btn btn-light d-flex justify-content-start py-2">
                            <span class="me-4">
                                <img src="./assets/images/google.png" alt="" class="images">
                            </span>
                        
                            <span>
                                Sign up with Google
                            </span>
            
                        </button>
            
                        <button type="button" class="btn btn-light d-flex justify-content-start">
                            <span class="me-4">
                            <img src="./assets/images/facebook.png" alt="" class="images">
                            </span>
                            <span>
                                Sign up with Facebook
                            </span>
                        </button> --}}
                      </form>
                

                </div>
            </div>
        </div>
@endsection