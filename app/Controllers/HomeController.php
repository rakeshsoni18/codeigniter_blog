<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class HomeController extends BaseController
{
    private $posts;

    public function __construct()
    {
        $this->posts = new Post();

        helper(['excerpt']);
    }

    public function index(): string
    {
        $data = [
            'posts' => $this->posts->paginate(10),
            'pager' => $this->posts->pager
        ];

        return view('index', $data);
    }

    public function show($slug = NULL)
    {
        $post = $this->posts->where('slug', $slug)->first();

        if (!$post) {
            return redirect()->route('homepage');
        }

        $data = [
            'page_title' => 'Single Blog',
            'post' => $post,
            'errors' => NULL
        ];

        return view('single_blog', $data);
    }

    public function create(): string
    {
        return view('create_blog');
    }

    public function store()
    {
       return "strong";
    }

    public function search(): string
    {
       $q = $this->request->getVar('q');

       $posts = $this->posts->like('title', $q, '%')->paginate(10);

       $data = [
           'posts' => $posts,
           'query_string' => $q,
           'pager' => $this->posts->pager
       ];

       return view('search', $data);
    }
}
