@extends('layaout.master')
@section('title','contact me ')






@section('contant')
    <div class="container">
 
@foreach ($array as $value)
   <li> {{$value}}</li>
@endforeach

    </div>
@endsection
