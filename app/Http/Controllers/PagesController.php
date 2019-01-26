<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    public function wood() {
        return view('wood_cutting');
    }
    public function diy() {
        return view('diy');
    }
}
