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
        $answerlist = AnswerModel::find_by_id($id);
        return view('questionpage', compact('items','answerlist'));
    }
    
    public function post(Request $req,$id) {
        $date = Carbon::now()->toDateTimeString();
        AnswerModel::save(
            [
                'content'=>$req->acontentbox,
                'dateuploaded'=>$date,
                'question_id'=>$id
            ]
        );

        return redirect("/questions/$id");
    }
}
