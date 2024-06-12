<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlWindowController extends Controller
{
    public function index()
    {
        return view('control.index');
    }

    public function showRegisterForm()
    {
        return view('control.register');
    }
}
