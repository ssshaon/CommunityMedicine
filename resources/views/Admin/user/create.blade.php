@extends('Admin.layouts.master')
@section('add_center','active')
@section('main_title','Add Center')
@section('content_name','Create New Center')
 @section('content')
 {!! Form::open() !!}
 <div>
     {!! Form::label('name','Name') !!}
     {!! Form::text('name',null,['placeholder'=>'Center Name']) !!}

 </div>
 <div>
     {!! Form::label('name','District') !!}
     {!! Form::text('name',null,['placeholder'=>'--Select--']) !!}
 </div>
 <div>
     {!! Form::label('name','Thana') !!}
     {!! Form::text('name',null,['placeholder'=>'--Select--']) !!}
 </div>
 <div>
{!! Form::submit('Save') !!}
 </div>
     {!! Form::close() !!}
     @endsection


