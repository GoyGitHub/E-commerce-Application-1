<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;


class ProductController extends Controller
{
    public function home() : Response
    {
        return Inertia::render('Home');
    }
}
