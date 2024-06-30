@extends('layouts.app')

@section('title', 'Movie List')

@section('content')
<h4 class="mb-4">All Movies</h4>

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if ($movies->isNotEmpty())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Director</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>
                        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No movies found.</p>
@endif

<a href="{{ route('movies.create') }}" class="btn btn-primary mt-4">Add New Movie</a>
@endsection
