@extends('layouts.side')

@section('content')
<br>
<br>
<br>
<br>


    <div class="container mb-3">
        <div class=""style="position:relative; left:300px">
            <h1 class="h1" style="font-family: helvetica">Create a Task</h1>
            <div class="">
                <div class="w-8/12 bg-white p-6 rounded-lg mt-4">
                    
                    <form action="{{route('NewTask')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="body" class="sr-only">Body</label>
                            <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg
                            @error('body') border-danger @enderror" placeholder="Your New Task..."></textarea>
                            @error('body')
                            <div class="text-danger mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger text-white">Add</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>

@endsection