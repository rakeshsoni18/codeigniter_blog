<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Post;

class BlogController extends BaseController
{
    private $posts;

    public function __construct()
    {
        $this->posts = new Post();
        helper('excerpt');
    }

    public function index(): string
    {
        $data = [
            'posts' => $this->posts->paginate(10),
            'pager' => $this->posts->pager
        ];

        return view('admin/blog/index', $data);
    }

    public function new(): string
    {
        return view('admin/blog/create');
    }

    public function create()
    {
        return "store";
    }

    public function edit($id = null): string
    {
        return view('admin/blog/edit');
    }

    public function update($id = null)
    {
        return "update";
    }

    public function delete($id = null)
    {
        return $id;
    }
}
