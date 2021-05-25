<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterGameController extends Controller
{
    public function index() {
        $nums = config('nums');
        return view('index')->with(['nums' => $nums]);
    }
}
