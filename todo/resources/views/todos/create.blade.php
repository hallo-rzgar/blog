@extends('layout.app')
@section('content')


    <div>Create Todo</div>
    {!! Form::open(['action' => 'App\Http\Controllers\TodosController@store', 'method'=>'POST']) !!}
    {{ Form::bsText('first_name') }}
    {!! Form::close() !!}

@endsection
