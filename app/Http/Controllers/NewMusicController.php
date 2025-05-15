<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;

use App\Models\Song;

class NewMusicController extends Controller
{
    /**
     * Store a new music.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('naam_music');
        $author = $request->input('auteur');
        $year = $request->input('jaar');

        $validation = $request->validate([
            'naam_music' => 'required|string|min:3|max:32',
            'auteur' => 'required|string|min:6|max:32',
            'jaar' => 'required|integer|min:1900|max:2023',
        ]);
        // echo $name;
        // echo $author;
        // echo $year;
        // $song = Song::create([
        //     'song_name' => $name,
        //     'author' => $author,
        //     'release_year' => $year,
        // ]);
        $song = new Song;
        $song->song_name = $name;
        $song->author = $author;
        $song->release_year = $year;

        $song->save();
    }
}