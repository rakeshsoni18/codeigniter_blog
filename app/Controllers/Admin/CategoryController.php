<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    private $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index(): string
    {
        $data = [
            'categories' => $this->category->paginate(10),
            'pager' => $this->category->pager
        ];

        return view('admin/category/index', $data);
    }

    public function new(): string
    {
        return view('admin/category/create');
    }

    public function edit($id = NULL): string
    {
        return view('admin/category/edit');
    }
}
