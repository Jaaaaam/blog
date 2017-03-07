<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('index', compact('blogs'));
    }
}
