<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AgriConnect</title>
	<link href="{{url('Frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{url('Frontend/css/font-awesome.min.css')}}" rel="stylesheet" >
	<link href="{{url('Frontend/css/global.css')}}" rel="stylesheet">
	<link href="{{url('Frontend/css/index.css')}}" rel="stylesheet">
    <link href="{{url('Frontend/css/contact.css')}}" rel="stylesheet">
    <link href="{{url('Frontend/css/blog.css')}}" rel="stylesheet">
    <link href="{{url('Frontend/css/services.css')}}" rel="stylesheet">
    <link href="{{url('Frontend/css/about.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Frontend/css/custom-style.css') }}">
	<script src="{{url('Frontend/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="icon" type="image/x-icon" href="{{asset('Frontend/img/tractor-logo.png')}}">

</head>

@include('Frontend.layouts.header')
@yield('main-container')
@include('Frontend.layouts.footer')
