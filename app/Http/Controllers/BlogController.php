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

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function store(Request $request, Blog $blog)
    {
        $blog = new Blog;

        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->slug = $request->slug;
        $blog->body = $request->body;
        $blog->save();

        return redirect('/');
    }

    public function update(Request $request, Blog $blog)
    {

        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->slug = $request->slug;
        $blog->body = $request->body;
        $blog->save();

        return redirect('/blog'.'/'.$request->slug);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/');
    }
}
