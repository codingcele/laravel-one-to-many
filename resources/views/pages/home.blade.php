@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>People</h1>

        <ul>
            @foreach ($people as $person)
                
                <li>
                    {{ $person -> name }} - {{ $person -> mail }}
                    <br>
                    Phone: {{ $person -> personDetail -> phone }}
                    <br>
                    Address: {{ $person -> personDetail -> address }}
                    <hr>
                </li>

            @endforeach
        </ul>

    </div>
@endsection