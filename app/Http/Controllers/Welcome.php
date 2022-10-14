<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    private $defaults = ['en' => 'en', 'fr' => 'fr'];

    public function index()
    {
        return view('welcome', [
            'posts' => $this->defaults
        ]);
    }
}
