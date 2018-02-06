@extends('layouts.app')
@section('main')




<!-- <iframe src="https://calendar.google.com/calendar/embed?src=thirdshiftvideo%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="1000" frameborder="0" scrolling="no"></iframe> -->

          
@php
$json_string = file_get_contents("http://api.wunderground.com/api/a42738d57e012c83/geolookup/conditions/q/OH/Twinsburg.json");
$parsed_json = json_decode($json_string);
// print_r($parsed_json);

	$location = $parsed_json->{'location'}->{'city'};
		$temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
		$feelslike_f = $parsed_json->{'current_observation'}->{'feelslike_f'};
		echo "Currently ${temp_f}° in ${location}. Feels like {$feelslike_f}°\n";	

@endphp

@endsection