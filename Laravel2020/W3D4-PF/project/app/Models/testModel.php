<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class TestModel {
    public static function get_all() {
        $items = DB::table('id')->get();
        return $items;
    }

    public static function save($data) {
        $new_item = DB::table('created_at')->insert($data);

        return $new_item;
    }
}