@extends('layouts.side')

@section('content')
    <br>
    <h2 class="h2" style="position:relative;left:300px;">Avatar</h2>
    <div class="bg-white w-3/5 p-5 mt-3" style="position:relative;left:300px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 ">
                    <img src="{{asset('assets/images/avatar.png')}}" alt="" style="border-radius:50%; height:150px; width:150px;float: left;margin-right:25px">
                    <h2 class="h2 mb-2">{{auth()->user()->name}}</h2>
                    <form action="{{route('profile')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="mb-3 flex flex-col">
                            <label for="avatar" class="h6 form-label">Profile Image</label>
                            <input type="file" name="avatar" class="" id="avatar" aria-describedby="emailHelp">
                            @error('avatar')
                            <div class="text-danger text-sm mt-2">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-sm btn-danger flex">Save changes</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="w-full border-2 p-6 border-light-blue-500 border-opacity-25 h-full">
        <form action="#" enctype="multipart/form-data" method="post">
              @csrf
              <div class="mb-3">
                  <label for="profileImg" class="form-label">Profile picture</label>
                  <input type="file" name="profileImg" class="form-control" id="profileImg" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{old('name')}}">
              </div>
              <div class="mb-3">
                   <label for="email" class="form-label">Email adress</label>
                   <input type="email" name="email" class="form-control" id="email">
              </div>
              <div class="mb-4">
                  <label for="pnum" class="form-label">Phone Number</label>
                  <input type="text" name="pnum" class="form-control" id="pnum" aria-describedby="emailHelp" value="{{old('pnum')}}">
              </div>
              <div class="flex justify-end">
                  <button type="submit" class="btn btn-danger flex">Save changes</button>
              </div>


          </form>
      </div> --}}
@endsection