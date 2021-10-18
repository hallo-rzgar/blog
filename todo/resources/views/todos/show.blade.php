@extends('layout.app')
@section('content')
    <a class="btn btn-default" href="/">Get Back</a>
    <div class="card mt-2 ">
        <h5 class="card-header  bg-secondary text-white">Todos</h5>
        <div class="card-body">
            <h1 class="card-title"><a class="text-decoration-none" href="todo/{{$todo->id}}" >{{$todo->text}}</a></h1>
            <h5 class="btn btn-danger  btn-sm ">{{$todo->due}}</h5>
            <p class="card-body"> {{$todo->body}}</p>
            <div class="form-inline">
                <button class="btn btn-success " >
                    <a class="text-decoration-none"  style="color: white" href="/todo/{{$todo->id}}/edit" >Edit</a>

                </button>
                <p  >
                    {!! Form::open(['action' =>[ 'App\Http\Controllers\TodosController@destroy', $todo->id], 'method'=>'POST']) !!}
                    {{ Form::hidden('_method','  DELETE') }}

                    {{ Form::bsSubmit('Delete','Delete',['class'=>"btn btn-success mt-1"] ) }}
                    {!! Form::close() !!}
                </p>

            </div>

        </div>
    </div>

@endsection

