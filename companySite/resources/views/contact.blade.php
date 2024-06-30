@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="form-container">
        <h1>Contact Us</h1>
        <form action="/contact" method="POST">
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
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                @error('subject')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message">{{ old('message') }}</textarea>
                @error('message')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
