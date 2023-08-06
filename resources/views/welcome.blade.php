@extends('layouts.main')
@section('title', 'Teste')
@section('content')
    <h1>ola mundo</h1>
    @if (10 < 15) <p>{{$nome}}</p>

        @endif
        @for ( $i = 0; $i < count($arry); $i++) <p>{{$arry[$i]}} - {{$i}}</p>
            @if ($i == 1)
            <p>Ola </p>

            @endif
            @endfor
            
            @foreach($ab as $ab)
            <p>{{ $ab }}</p>
            @endforeach

            
            @php
                $name = "Gusta";
                echo $name;

            @endphp

</body>
@endsection

