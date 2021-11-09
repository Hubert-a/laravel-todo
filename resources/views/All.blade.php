@extends('layouts.home')

@section('content')
<div class="container mr-6">
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