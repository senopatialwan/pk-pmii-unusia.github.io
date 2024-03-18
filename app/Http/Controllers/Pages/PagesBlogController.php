<?php

namespace App\Http\Controllers\Pages;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesBlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::latest();

        // Filter berdasarkan kategori
        if ($request->has('category')) {
            $blogs->whereHas('category', function ($query) use ($request) {
                $query->where('categories.id', $request->category);
            });
        }

        // Filter berdasarkan tag
        if ($request->has('tag')) {
            $blogs->whereHas('tags', function ($query) use ($request) {
                $query->where('tags.id', $request->tag);
            });
        }

        $blogs = $blogs->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        return view('pages.blogs.index', compact('blogs', 'categories', 'tags'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blogs.show', compact('blog'));
    }
}
