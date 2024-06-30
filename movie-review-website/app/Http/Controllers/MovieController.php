<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900',
            'director' => 'required|string|max:255',
            'synopsis' => 'required|string',
        ]);

        Movie::create($validatedData);

        return redirect()->route('movies.index')->with('success', 'Movie created successfully!');
    }

    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer|min:1900',
            'director' => 'required|string|max:255',
            'synopsis' => 'required|string',
        ]);

        $movie->update($validatedData);

        return redirect()->route('movies.show', $movie)->with('success', 'Movie updated successfully!');
    }
}
