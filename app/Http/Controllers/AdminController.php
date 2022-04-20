<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function stats()
    {
        return view('admin.stats');
    }
    public function stock()
    {
        return view('admin.stock');
    }
}
