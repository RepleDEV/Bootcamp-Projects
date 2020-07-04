<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionsModel {
    public static function get_all() {
        $table_contents = DB::table('questions')->get();
        return $table_contents;
    }

    public static function find_by_id($id){
        $table_contents = DB::table('questions')->find($id);
        return $table_contents;
    }

    public static function save($data) {
        DB::table('questions')->insert($data);
        $new_item_id = DB::table('questions')->where('content',$data['content'])->get()[0]->id;

        return $new_item_id;
    }

    public static function edit($data,$field,$row_id) {
        $affected = DB::table('questions')
                        ->where('id',$row_id)
                        ->update([$field => $data]);
        return $affected;
    }
}