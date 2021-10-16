@extends('layout.app')
@section('content')

    @if(count($todos)>0)
        @foreach($todos as $todo)
            <div class="card mt-2 ">
                <h5 class="card-header bg-">Todos</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$todo->text}}</h5>
                    <span class="btn-danger">{{$todo->due}}</span>
                </div>
            </div>
        @endforeach
    @endif
@endsection
