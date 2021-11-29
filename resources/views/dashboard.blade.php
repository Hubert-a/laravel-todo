@extends('layouts.side')

@section('content')

        <br>
        <br>
        <div class="flex justify-center" style="position: relative;left:50px">
            <div class="w-2/3 bg-white p-6 rounded-lg">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/images/avatar.png')}}" alt="profile" class="profile mr-4" style="height: 120px; width: 120px;">
                            <h3 class="h3">{{auth()->user()->name}}</h3>
                            {{-- <p class="h5">{{auth()->user()->profile()->body}}</p> --}}
                        </div>
                            <div class="d-flex ms-auto mb-auto">
                                <a href="#" role="button" class="btn bg-danger text-white rounded-pill">
                                    Edit Profile   
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="container"style="position: relative;left:50px">
    <div class="d-flex justify-content-around mt-5 mb-5">
       <a role="button"class="btn btn-secondary" id="all" style="width:8%; a:hover="red"" >All</a>
       <a class="btn btn-secondary" role="button" id="progress" style="width: 8%;">In Progress</a>
       <a href="" class="btn btn-secondary" role="button" id="complete" style="width: 8%;">Completed</a>
    </div>

   
   
    <div class style="position: relative;left:150px;" id="allcontent">
        
            <h5 class="mr-2 h5">All task

                <span class="badge text-white" style=" background: #161ae8;">{{$NewTask->count()}}</span>
            </h5>
            {{-- <p class="border text-center text-white " style="width:30px; background: #161ae8;">{{$NewTask->count()}}</p> --}}
       
        @if ($NewTask->count())
        @foreach($NewTask as $NewTask)
        <div class="card w-1/2 mb-2">
            <div class="card-body">
                <div>
                    <p class="">{{$NewTask->body}}</p><span class="text-gray-600 text-sm">
                              {{$NewTask->created_at->diffForHumans()}} 
                    </span>
                   <form action="{{route('NewTask.destroy',$NewTask)}}" method="post">
                       @csrf
                       @method('DELETE')
                       <Button type="submit" class="text-danger">Delete</Button>
                   </form>
                </div>
            </div>
        </div>
                @endforeach
                {{-- {{$NewTasks->links()}} --}}
            @else
            <div class="card w-1/2 mb-2">
                <div class="card-body">
                    <p>No Task Available</p>
                </div>
            </div>    
            @endif
</div>
       <div style="box-sizing:border-box;border-left:1px solid black">
            <div class="card" style="width: 18rem;position: absolute;left:820px ;border-left:1px solid black; display:none" id="progresscontent">
                <div class="card-body">
                        <p class="card-text"></p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="#" class="btn btn-success rounded-pill">Update</a>
                        <a href="#" class="btn btn-danger rounded-pill">Delete</a>
                    </div>
                </div>
            </div>
        </div>
            {{-- <script>
                var a;
                function show(){
                    if(a==1){
                        document.getElementById("allcontent").style.display="inline";
                        return a=0;
                    }
                    else{
                        document.getElementById("allcontent").style.display="none";
                        return a=1;
                    }
                }
            </script> --}}

    <script>
        $(document).ready(function(){
            $('#all').on('click',function(){
                $('#allcontent').toggle(1000)
            });
        });
        </script>
        <script>
            $(document).ready(function(){
                $('#progress').on('click',function(){
                    $('#progresscontent').toggle(1000)
                });
            });

        </script>
@endsection