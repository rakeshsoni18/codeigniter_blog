<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
