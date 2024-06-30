@extends('layouts.app')

@section('title', 'Edit Movie - ' . $movie->title)

@section('content')
<h1>Edit Movie - {{ $movie->title }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('movies.update', $movie) }}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $movie->title) }}">
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" min="1900" class="form-control" value="{{ old('year', $movie->year) }}">
    </div>

    <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" name="director" id="director" class="form-control" value="{{ old('director', $movie->director) }}">
    </div>

    <div class="form-group">
        <label for="synopsis">Synopsis:</label>
        <textarea name="synopsis" id="synopsis" class="form-control">{{ old('synopsis', $movie->synopsis) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Movie</button>
</form>
@endsection
