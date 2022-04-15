<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }
    public function view()
    {
        return view('pages.view');
    }
    public function create()
    {
        return view('pages.create');
    }
    public function edit()
    {
        return view('pages.edit');
    }
}
