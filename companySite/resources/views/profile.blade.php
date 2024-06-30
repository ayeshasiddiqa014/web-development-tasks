@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="form-container">
        <h1>Profile Form</h1>
        <form action="/profile" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio">{{ old('bio') }}</textarea>
                @error('bio')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
