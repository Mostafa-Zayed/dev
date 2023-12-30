<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevieweController extends Controller
{
    public function index()
    {
        return view('reviews.index');
    }
}
