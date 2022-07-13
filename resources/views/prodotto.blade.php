@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <main>
        <h1>{{ $pasta['titolo'] }}</h1>

        <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">

        <p>{!! $pasta['descrizione'] !!}</p>
    </main>
@endsection
