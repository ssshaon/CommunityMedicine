@extends('Admin.layouts.master')
@section('add_center','active')
@section('main_title','Send Medicine')
@section('content_name','Send Medicine')

@section('content')
    @if(Session::has('message'))
        <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>

    @endif


    {!! Form::open(['method'=>'post','url'=>'admin/center/sent']) !!}
    <div>
        {!! Form::label('text','Name') !!}
        {!! Form::text('text',null,['placeholder'=>'Center Name']) !!}

    </div>
    <div>
        {!! Form::label('string','District') !!}
        {!! Form::text('string',null,['placeholder'=>'--Select--']) !!}
    </div>
    <div>
        {!! Form::label('name','Thana') !!}
        {!! Form::text('name',null,['placeholder'=>'--Select--']) !!}
    </div>
    <div>
        {!! Form::label('title','Add Medicine') !!}
    </div>
    <div>
        {!! Form::label('string1','Select Medicine') !!}
        {!! Form::text('string1',null,['placeholder'=>'--Select--']) !!}
        {!! Form::label('integer','Quantity') !!}
        {!! Form::text('integer',null) !!}
        {!! Form::submit('Add') !!}
    </div>
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
            </tr>
            <tr>

            </tr>
            </thead>

        </table>

    </div>
    <div>
        {!! Form::submit('Save') !!}
    </div>
    {!! Form::close() !!}

@endsection


