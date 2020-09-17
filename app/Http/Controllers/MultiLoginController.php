<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiLoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('CheckRole');
    // }

    public function admin()
    {
        return view('admin.index');
    }

    public function waiters()
    {
        return view('waiters.index');
    }

    public function cashier()
    {
        return view('cashier.index');
    }

    public function owner()
    {
        return view('owner.index');
    }
}
