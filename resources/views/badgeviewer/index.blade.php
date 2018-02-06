@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{  asset('css/grid.css')  }}">

@php
	$data = file_get_contents('https://www.codeschool.com/users/3550356.json');
	$json_data = json_decode($data, true);
	// var_dump($json_data['courses']['completed']);
	$courses = $json_data['courses']['completed'];
@endphp


@section('title', 'codeschool.com completed courses')


@section('main')
<div class="container">
    <div class="grid">
        
		@foreach ($courses as $course)
		  
			<div class="grid-cell">
				<a href='{{ $course["url"] }}'>
					<img height="200px" src='{{  $course["badge"]  }}'/>
				</a>
			</div>
		
		@endforeach
        
	</div>
</div>
@endsection