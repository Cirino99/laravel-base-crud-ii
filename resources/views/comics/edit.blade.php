@extends('templates.base')

@section('pageTitle', 'Create')

@section('mainContent')
<main> 
    <h1>Sono l'edit</h1>
    <form action="{{ route('comics.update' , ['comic' => $comic]) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="title">title</label>
            <input type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description" id="description" value="{{$comic->description}}">
        </div>
        <div>
            <label for="thumb">thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="series">series</label>
            <input type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="sale_date">sale_date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="type">type</label>
            <input type="text" name="type" id="type" value="{{$comic->type}}">
        </div>

        <button>Save</button>
    </form>
</main>
@endsection