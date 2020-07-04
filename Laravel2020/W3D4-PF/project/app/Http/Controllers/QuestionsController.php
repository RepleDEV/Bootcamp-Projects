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
        if(!$req)return redirect()->action('QuestionsController@index');
        $date = Carbon::now()->toDateTimeString();

        $saved = QuestionsModel::save(
            [
                'title'=>$req->title,
                'content'=>$req->qcontentbox,
                'dateuploaded'=>$date,
                'dateupdated'=>$date
            ]
        );

        return redirect("/questions/$saved");
    }

    public function deleteq($id) {
        QuestionsModel::del_by_id($id);
        return redirect()->action('QuestionsController@index');
    }

    public function edit($id) {
        $old_q = QuestionsModel::find_by_id($id);

        $old_content = $old_q->content;
        $old_title = $old_q->title;
        $method = "PUT";

        return view('questions_create', compact('old_content', 'old_title', 'method', 'id'));
    }
    
    public function saveedit(Request $req, $id) {
        $date = Carbon::now()->toDateTimeString();
        QuestionsModel::edit($req->title,'title',$id);
        QuestionsModel::edit($req->qcontentbox,'content',$id);
        QuestionsModel::edit($date,'dateupdated', $id);

        return redirect("/questions/$id");
    }
}
