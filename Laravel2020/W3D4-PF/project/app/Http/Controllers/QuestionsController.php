<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionsModel;

class QuestionsController extends Controller
{
    public function index() {
        $items = QuestionsModel::get_all();
        return view('questions', compact('items'));
    }
}
