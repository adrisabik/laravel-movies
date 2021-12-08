<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();

        return view('home', ['movies' => $movies]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'year' => 'required',
            'image' => 'image'
        ]);

        Movies::create([
            'title' => request('title'),
            'year' => request('year'),
            'image' => request()->file('image')->store('movies-image')
        ]);

        return redirect('/');
    }

    public function edit(Movies $movie)
    {
        return view('edit', ['movie' => $movie]);
    }

    public function update(Movies $movie)
    {
        request()->validate([
            'title' => 'required',
            'year' => 'required',
            'image' => 'image'
        ]);

        $movie->update([
            'title' => request('title'),
            'year' => request('year'),
            'image' => request()->file('image')->store('movies-image')
        ]);

        return redirect('/');
    }

    public function destroy(Movies $movie)
    {
        $movie->delete();

        return redirect('/');
    }

}
