<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
    public function auth(Request $rq) {
        $fname = $rq->input('fname');
        $lname = $rq->input('lname');
        return view('welcome', compact("fname", "lname"));
    }
}