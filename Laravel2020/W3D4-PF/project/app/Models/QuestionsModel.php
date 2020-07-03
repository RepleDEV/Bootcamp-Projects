<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionsModel {
    public static function get_all() {
        $table_contents = DB::table('questions')->get();
        return $table_contents;
    }

    public static function save($data) {
        $new_item = DB::table('questions')->insert($data);

        return $new_item;
    }
}