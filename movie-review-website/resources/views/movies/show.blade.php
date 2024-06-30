@extends('layouts.app')

@section('title', 'Movie Details - ' . $movie->title)

@section('content')
<h1 class="mb-4">{{ $movie->title }}</h1>

<div class="row mb-4">
    <div class="col-md-6">
        <p><strong>Year:</strong> {{ $movie->year }}</p>
        <p><strong>Director:</strong> {{ $movie->director }}</p>
    </div>
    <div class="col-md-6">
        <p><strong>Synopsis:</strong></p>
        <p>{{ $movie->synopsis }}</p>
    </div>
</div>

<a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to Movies</a>
<a href="{{ route('movies.edit', $movie) }}" class="btn btn-primary">Edit Movie</a>
@endsection
