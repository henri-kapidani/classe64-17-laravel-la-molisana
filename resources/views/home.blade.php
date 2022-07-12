@extends('templates.base')

@section('pageTitle', 'La Molisana - Home')

@section('pageMain')
    <main>
        <ul>
            @foreach ($arrPaste as $pasta)
                <li>{{ $pasta['titolo'] }}</li>
            @endforeach
        </ul>
    </main>
@endsection
