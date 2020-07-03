<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionsModel;

use Carbon\Carbon;

class QuestionsController extends Controller
{
    public function index() {
        $items = QuestionsModel::get_all();
        return view('questions', compact('items'));
    }

    public function submit(Request $req) {
        $date = Carbon::now()->toDateTimeString();

        QuestionsModel::save(
            [
                'title'=>$req->title,
                'content'=>$req->qcontentbox,
                'dateuploaded'=>$date,
                'dateupdated'=>$date
            ]
        );

        return redirect()->action('QuestionsController@index');
    }
}
