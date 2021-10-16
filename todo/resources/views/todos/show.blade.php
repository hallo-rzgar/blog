@extends('layout.app')
@section('content')
    <a class="btn btn-default" href="/">Get Back</a>
    <div class="card mt-2 ">
        <h5 class="card-header  bg-secondary text-white">Todos</h5>
        <div class="card-body">
            <h1 class="card-title"><a class="text-decoration-none" href="todo/{{$todo->id}}" >{{$todo->text}}</a></h1>
            <div class="btn btn-danger m-2">{{$todo->due}}</div>
            <p class="card-body"> {{$todo->body}}</p>
         </div>
    </div>

@endsection

