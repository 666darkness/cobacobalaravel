<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'huehue')
@section('css')
	        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <p>This is my body content.</p>
	
	<a href= "{{url('/iseng')}}">Click Me!</a>
@endsection

@section('js')
	<script src="{{asset('js/app.js')}}"> </script>
@endsection