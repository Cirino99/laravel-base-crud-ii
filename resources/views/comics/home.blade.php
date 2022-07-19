@extends('templates.base')

@section('pageTitle', 'Home')

@section('mainContent')
<main> 
    <h1>Sono la home</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{$comic->title}} -- {{$comic->price}} -- {{$comic->sale_date}} --
                <a href="{{ route('comics.show', ['comic' => $comic]) }}">View</a> -- 
                <a href="{{ route('comics.edit', ['comic' => $comic]) }}">Edit</a>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</main>
@endsection