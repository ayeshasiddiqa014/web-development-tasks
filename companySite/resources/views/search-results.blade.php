@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="form-container">
        <h1>Search Results</h1>
        @if($users->isEmpty())
            <p>No users found with the email address "{{ request('email') }}".</p>
        @else
            <ul>
                @foreach($users as $user)
                    <li>{{ $user->name }} ({{ $user->email }})</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
