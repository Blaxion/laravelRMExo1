@extends('layout.index')
@section('main')
    <div>   
        @if (is_numeric($chiffre) == true)
        {{$chiffre}}*2={{$chiffre*2}} 
        @else
        t'as cru quoi
        @endif
    </div>
@endsection