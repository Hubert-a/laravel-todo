@extends('layouts.side')

@section('content')
<div class="bg-white w-3/5 p-5 mt-3" style="position:relative;left:300px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
                <div class="w-full border-2 p-6 border-light-blue-500 border-opacity-25 h-full">
                    <form action="" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PATCH')
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
                            <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" value="{{old('description')}}">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="btn btn-danger flex">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection