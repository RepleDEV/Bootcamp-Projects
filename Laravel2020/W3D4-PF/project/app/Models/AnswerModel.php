<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class AnswerModel {
    public static function get_all() {
        $table_contents = DB::table('answers')->get();
        return $table_contents;
    }

    public static function find_by_id($id){
        $table_contents = DB::table('answers')->where('question_id',$id)->get();
        return $table_contents;
    }

    public static function save($data) {
        $new_item = DB::table('answers')->insert($data);
        return $new_item;
    }
}