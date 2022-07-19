@extends('templates.base')

@section('pageTitle', 'Home')

@section('mainContent')
<main> 
    <h1>Comics list</h1>
    <h3>Add new Comic
        <a href="{{ route('comics.create') }}" class="btn btn-info">Add</a>
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic]) }}" class="btn btn-primary">View</a>
                </td>
                <td>
                    <a href="{{ route('comics.edit', ['comic' => $comic]) }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <form action="{{ route('comics.destroy', ['comic' => $comic]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
@endsection