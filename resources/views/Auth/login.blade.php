@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-danger">
                <div class="text-center">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" class="align-items-baseline"style="width: 70%; height:70%" >
                </div>
                <div class="container ">
                        <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                        <pre class="text-center text-white">Overwhelmed by your daily tasks?
Get them under control with todolist!</pre>
                </div> 
            </div>

            <div class="col-md-6 bg-light">
                <div class="container">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <h3 class="mt-5">Get Started...</h3>
                        <p class="mb-5 message"><small>Don’t have an account? <a href="#" class="text-danger ms-2"  style="text-decoration: none;">Register</a></small></p>
    
                        <p class="h4 text-center mb-3">Login Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>
                        @if (session('status'))
                            <div class="bg-danger p-4 rounded mb-6 text-white text-center">
                                {{session('status')}}
                            </div>
                        @endif
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

                <div class="container">
                    <form action="{{route('register')}}" method="POST" style="display: none">
                        <h3 class="mt-5">Get Started...</h3>
                        <p class="mb-5 message"><small>Already have an account? <a href="#" class="text-danger ms-1"  style="text-decoration: none;">Login</a></small></p>
                        <p class="h4 text-center mb-3">Register Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') border-danger @enderror" name="name" id="name" placeholder="Full Name" value="{{old('name')}}" >
        
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
                        
                               
                            <div class="form-floating mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" >
                                {{-- <span>
                                    <img src="../assets/images/view.png" alt="view" class="view fa" onclick="toggle()">
                                </span> --}}
                            </div>
                                <button type="submit" class="btn btn-danger">Register</button>

                            {{-- <div class="d-grid gap-2 mb-5">
                                <button type="submit" name="submit" class="btn btn-danger rounded-pill btn-block">REGISTER</button>
                            </div> --}}
                        </form>
                </div>    
            </div>
        </div>
    </div>  
                
        
                
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script>
                    $('.message a').click(function(){
                        $('form').animate({height:"toggle", opacity:"toggle"}, "slow");
                    });
                </script>
                
@endsection