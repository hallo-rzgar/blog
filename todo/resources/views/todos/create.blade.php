@extends('layout.app')
@section('content')


    <div class="font-weight-bold">Create Todo</div>
    {!! Form::open(['action' => 'App\Http\Controllers\TodosController@store', 'method'=>'POST']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit','submit' ,['class'=>'btn btn-primary mt-2']) }}
    {!! Form::close() !!}

@endsection
