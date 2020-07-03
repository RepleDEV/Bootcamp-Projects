<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testModel;

class ItemController extends Controller
{
    public function index() {
        $questions_table = testModel::get_all();
        return view('questions', compact('questions_table'));
    }
}
