<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Common
{
    public static function getCategory()
    {
        $categorydata = array();
        $category = DB::table('categories')->where(['active' => 1])->get();
        foreach ($category as $key => $value) {
            $categorydata[$value->id] = $value->name;
        }
        return $categorydata;

    }
    /* for the get the last id of the table */
    public static function lastId($table = null)
    {
        $id= DB::table($table)->select('id')->orderBy('id', 'desc')->first();       
        return $id->id;        
    }
    public static function getAdminProfile($id)
    {
        $profile = DB::table('admins')->where(['id' => $id])->first();          
        return $profile;
    }

}
