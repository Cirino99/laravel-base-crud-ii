@extends('templates.base')

@section('pageTitle', 'Show')

@section('mainContent')
<main> 
    <h1>Sono lo show</h1>
    <ul>
        @foreach ($comic->toArray() as $key => $value)
            <li>{{ $key }} --> {{ $value }}</li>
        @endforeach
    </ul>
</main>
@endsection