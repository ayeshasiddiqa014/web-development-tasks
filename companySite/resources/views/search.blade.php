@extends('layouts.app')

@section('title', 'Search User by Email')

@section('content')
    <div class="form-container">
        <h1>User Search Form</h1>
        <form action="/search" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Search</button>
        </form>
    </div>
@endsection
