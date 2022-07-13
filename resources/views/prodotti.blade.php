@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')
    <main>
        {{--
            [
                'type1'  => [
                    [],
                    [], ...
                ],
                'type2'  => [
                    [],
                    [],
                    [], ...
                ],
                ...
            ]
        --}}
        <h1>Prodotti</h1>
        <ul>
            @foreach ($arrPaste as $tipo => $paste)
                <h2>Tipo pasta: {{ $tipo }}</h2>
                @foreach ($paste as $pasta)
                    <li><a href="{{ route('prodotto', ['id' => $pasta['id']]) }}">{{ $pasta['titolo'] }}</a></li>
                @endforeach
            @endforeach
        </ul>
    </main>
@endsection
