<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterGameController extends Controller
{
    public function index() {
        $nums = config('nums');
        return view('job-hunting-sugoroku.index')->with(['nums' => $nums]);
    }
}
