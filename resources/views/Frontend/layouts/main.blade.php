<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agrigoal</title>
	<link href="{{url('Frontend/css/bootstrap.min.css')}}" rel="stylesheet" >
	<link href="{{url('Frontend/css/font-awesome.min.css')}}" rel="stylesheet" >
	<link href="{{url('Frontend/css/global.css')}}" rel="stylesheet">
	<link href="{{url('Frontend/css/index.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
	<script src="{{url('Frontend/js/bootstrap.bundle.min.js')}}"></script>

</head>

@include('Frontend.layouts.header')
@yield('main-container')
@include('Frontend.layouts.footer')