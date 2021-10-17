@extends('layout.app')
@section('content')

    <a href="/todo/{{$todo->id}}" class="btn btn-default">Get Back</a>
    <div class="bg bg-primary "> Edit Todo</div>
    {!! Form::open(['action' => ['App\Http\Controllers\TodosController@update',$todo->id], 'method'=>'POST']) !!}
    {{ Form::bsText('text',$todo->text) }}
    {{ Form::bsTextArea('body',$todo->body) }}
    {{ Form::bsText('due',$todo->due) }}
    {{ Form::hidden('_method','PUT') }}
    {{ Form::bsSubmit('Submit','Update' ,['class'=>'btn btn-primary mt-2']) }}
    {!! Form::close() !!}

@endsection
