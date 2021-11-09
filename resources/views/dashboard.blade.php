@extends('layouts.home')

@section('content')
<div class="flex justify-center">
    <div class="w-10/12 bg-white p-6 rounded-lg">

        
        @if ($NewTask->count())
            @foreach($NewTask as $NewTask)
                <div class="mb-4">
                    <p class="mb-2">{{$NewTask->body}}</p><span class="text-gray-600 text-sm">
                       {{$NewTask->created_at->diffForHumans()}} 
                    </span>
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