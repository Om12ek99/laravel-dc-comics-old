@extends('layouts.app')

@section('content')
    <h1>Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="thumb">Thumb URL</label>
            <input type="text" name="thumb" id="thumb" required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" required>
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" required>
        </div>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" required>
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" required>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection