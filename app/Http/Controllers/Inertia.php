<?php


use Inertia\Controller;
use Illuminate\Http\Request;


class Inertia extends Controller
{
    public function index()
    {
        return Inertia::render('ExampleComponent');
    }
}