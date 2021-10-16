@extends('layout.app')
@section('content')

    @if(count($todos)>0)
        @foreach($todos as $todo)
            <div class="card mt-2 ">
                <h5 class="card-header  bg-secondary text-white">Todos</h5>
                <div class="card-body">
                    <h5 class="card-title"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h5>
                    <span class="bg-danger">{{$todo->due}}</span>
                </div>
            </div>
        @endforeach
    @endif
@endsection
