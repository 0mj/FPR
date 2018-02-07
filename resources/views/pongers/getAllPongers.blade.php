@extends('layouts.app')
@section('main')




          
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