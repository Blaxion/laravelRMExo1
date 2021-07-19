@extends('layout.index')
@section('main')
    <div>   
        @if (is_numeric($chiffre1) == true AND  is_numeric($chiffre2) == true)
        <p>{{$chiffre1 + $chiffre2}}</p>
        <p>{{$chiffre1 - $chiffre2}}</p>
        @else
        t'as cru quoi
        @endif
    </div>
    
@endsection
    
