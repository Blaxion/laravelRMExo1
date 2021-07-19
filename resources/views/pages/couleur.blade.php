@extends('layout.index')
@section('main')
    <ul>
        <li class="{{$couleur=='Red'?'bold':''}}">Red</li>
        <li class="{{$couleur=='Green'?'bold':''}}">Green</li>
        <li class="{{$couleur=='Blue'?'bold':''}}">Blue</li>
    </ul>
@endsection
