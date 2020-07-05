<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all() {
        $data = DB::table('article')->get();
        return $data;
    }

    public static function save($data) {
        $new_pertanyaan = DB::table('article')->insert($data);
        return $new_pertanyaan;
    }

    public static function update($id, $data) {
        $update_pertanyaan = DB::table('article')
                                        ->where('id', $id)
                                        ->update($data);
        return $update_pertanyaan;
    }

    public static function delete($id) {
        $delete_pertanyaan = DB::table('article')
                                ->where('id', $id)
                                ->delete();
        return $delete_pertanyaan;
    }

    public static function getOne($id) {
        $item = DB::table('article')->where('id', $id)->first();
        return $item;
    }

    public static function updateData($id, $data) {
        $affected = DB::table('article')
                    ->where('id', $id)
                    ->update($data);
        return $affected;
    }

}
?>