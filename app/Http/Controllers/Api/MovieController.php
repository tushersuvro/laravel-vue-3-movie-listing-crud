<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
//        return Movie::all();
        $movies = Movie::with('genre')->paginate(10);
        return MovieResource::collection($movies);
    }
}
