@extends('layout.app')
@section('content')

    @if(count($todos)>0)
        @foreach($todos as $todo)
            <div class="card mt-2 ">
                <h5 class="card-header  bg-secondary text-white">Todos</h5>
                <div class="card-body">
                    <h2 class="card-title"><a class="text-decoration-none" href="todo/{{$todo->id}}">{{$todo->text}}</a></h2>
                    <span class="btn btn-danger btn-sm">{{$todo->due}}</span>
                </div>
            </div>
        @endforeach
    @endif
@endsection
