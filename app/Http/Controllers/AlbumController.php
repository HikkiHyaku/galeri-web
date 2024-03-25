<?php

namespace App\Http\Controllers;

use App\Models\AlbumsModel;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index() {
        return view('page.album', [
            "active" => "album",
            "title" => "Album",
            'data' => AlbumsModel::all(),
        ]);
    }

    public function create()
    {
        return view('page.albumaction.create', [
            "title" => "Create Album"
        ]);
    }
}
