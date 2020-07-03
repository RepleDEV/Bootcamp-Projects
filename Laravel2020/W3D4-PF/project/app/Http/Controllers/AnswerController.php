<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionsModel;
use App\Models\AnswerModel;

use Carbon\Carbon;
class AnswerController extends Controller
{
    public function show($id) {
        $items = QuestionsModel::find_by_id($id);
        $answerlist = AnswerModel::get_all();
        return view('answers', compact('items','answerlist'));
    }
    
    public function post(Request $req,$id) {
        $date = Carbon::now()->toDateTimeString();

        AnswerModel::save(
            [
                'content'=>$req->acontentbox,
                'dateuploaded'=>$date
            ]
        );

        return redirect("/answers/$id");
    }
}
