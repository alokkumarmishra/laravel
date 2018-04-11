<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class Common {
    public static function getCategory()
    {
       $categorydata=array();
       $category= DB::table('categories')->where(['active'=>1])->get();
       foreach($category as $key => $value)
       {
        $categorydata[$value->id]=$value->name;
       }
       return $categorydata;

    }


}

?>