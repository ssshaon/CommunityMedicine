@extends('Admin.layouts.master')
@section('add_center','active')
@section('main_title','Add Center')
@section('content_name','Create New Center')

 @section('content')
     @if(Session::has('message'))
         <h2 class="btn btn-success">{{Session::get('message')}}</h2><br>
         {{Auth::user()->id}}<br>
         {{Auth::user()->password}}
     @endif


 {!! Form::open(['method'=>'post','url'=>'admin/user/store']) !!}
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
{!! Form::submit('Save') !!}
 </div>
     {!! Form::close() !!}

     @endsection


