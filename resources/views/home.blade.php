@extends('layout')

@section('content')    
<h1>100 meters Olympics - Hall of Fame</h1>
    @foreach ($players as $player)
      {{$player->name}}{{ ",  ". $player->country}}<br/>
    @endforeach

@endsection
    
