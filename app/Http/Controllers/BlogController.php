<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        $categories = Category::orderBy('title')->get();
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function getPostsByCategory($slug)
    {
        $categories = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        return view('pages.categories', [
            'posts' => $current_category->posts()->paginate(4),
            'categories' => $categories,
            'current_category' => $current_category
        ]);
    }

    public function getPost($slug_category, $slug_post)
    {
        $categories = Category::orderBy('title')->get();
        $post = Post::where('slug', $slug_post)->first();
        return view('pages.show-post', [
            'categories' => $categories,
            'post' => $post,
            'slug_category' => $slug_category
        ]);
    }
}
