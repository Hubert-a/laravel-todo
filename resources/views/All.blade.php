@extends('layouts.side')

@section('content')
<br>
<br>
<div class="flex justify-center mb-5" style="position: relative;left:50px">
    <div class="w-2/3 bg-gray-200 p-6 rounded-lg">
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
            </div>
        </div>
    </div>
</div>
</div>
<div class="container" style="position: relative;left:200px">
    <div class="w-7/12 bg-white p-6 rounded-lg">

        @if ($NewTask->count())
                        @foreach($NewTask as $NewTask)
                            <div class="mb-4">
                                <button type="submit" class="w-1/2 bg-gray-200 p-2 rounded">
                                    <div class="">
                                        <p class="mb-2">{{$NewTask->body}}</p><span class="text-gray-600 text-sm">
                                           {{$NewTask->created_at->diffForHumans()}} 
                                        </span>
                                    </div>
                                </button>
                                <form action="{{route('NewTask.destroy',$NewTask)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <Button type="submit" class="text-danger">Delete</Button>
                                </form>
                            </div>
                        @endforeach
                        
                    @else
                        <p>No Task Available</p>
                    @endif
    </div>
</div>
@endsection