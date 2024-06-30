@extends('layouts.app')

@section('title', 'Create New Movie')

@section('content')
<h1>Add New Movie</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('movies.store') }}">
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" min="1900" class="form-control" value="{{ old('year') }}">
    </div>

    <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" name="director" id="director" class="form-control" value="{{ old('director') }}">
    </div>

    <div class="form-group">
        <label for="synopsis">Synopsis:</label>
        <textarea name="synopsis" id="synopsis" class="form-control">{{ old('synopsis') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Movie</button>
</form>

@endsection
