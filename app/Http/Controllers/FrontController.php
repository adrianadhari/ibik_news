<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $featuredPost = Post::where('is_featured', true)->first();
        $popularPosts = Post::where('status', 'Published')
            ->where('published_date', '<=', now())
            ->orderBy('viewed', 'desc')
            ->take(6)
            ->get();
        $rencentPosts = Post::where('status', 'Published')
            ->where('published_date', '<=', now())
            ->orderBy('published_date', 'desc')
            ->take(7)
            ->get();
        return view('index', compact('categories', 'featuredPost', 'popularPosts', 'rencentPosts'));
    }

    public function detail($slug)
    {
        $categories = Category::all();
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();
        return view('detail', compact('post', 'categories'));
    }

    public function category($slug)
    {
        $categories = Category::all();
        $categoryId = Category::where('slug', $slug)->pluck('id');
        $categoryName = Category::where('slug', $slug)->pluck('name');
        $posts = Post::where('status', 'Published')
            ->where('published_date', '<=', now())
            ->where('category_id', $categoryId)
            ->orderBy('published_date', 'desc')
            ->paginate(3);

        return view('category', compact('posts', 'categories', 'categoryName'));
    }
}
