<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Schema;
class MyFuncs {

    public static function full_name($first_name,$last_name) {
        return $first_name . ', '. $last_name;   
    }

    /****** start here for the global functions **********/
    public static function save($array,$table_name)
    {
       	$fields = Schema::getColumnListing($table_name);
    	unset($fields[0]);     	
    	$data=array();
    	foreach($array as $key => $value)
        {
            if(in_array($key, $fields))
            {
              $data[$key]=$value;             
            }
        } 
        if(!empty($data))
        {
    	 $tt=DB::table($table_name)->insert($data);
    	 if($tt)
    	 {
    	 	return true;
    	 }
    	 else
    	 {
    	 	return false;
    	 }
        }
        else
        {
        	return false;
        }    	
    }

    public static function update($array,$table_name,$cond)
    {
       	$fields = Schema::getColumnListing($table_name);
    	unset($fields[0]);     	
    	$data=array();
    	foreach($array as $key => $value)
        {
            if(in_array($key, $fields))
            {
              $data[$key]=$value;             
            }
        } 
        if(!empty($data))
        {    	
    	 $tt=DB::table($table_name)
            ->where($cond)
            ->update($data);
            return true;
    	 // if($tt)
    	 // {
    	 // 	return true;
    	 // }
    	 // else
    	 // {
    	 // 	return false;
    	 // }
        }
        else
        {
        	return false;
        }    	
    }
public static function delete($table_name,$cond)
{
	$tt=DB::table($table_name)->where($cond)->delete();
	  if($tt)
    	 {
    	 	return true;
    	 }
    	 else
    	 {
    	 	return false;
    	 }
       
}


public static function findAll($table,$cond)
{
    if(empty($cond))
    {
        $data = DB::table($table)->get();
    }
    else
    {
        $data = DB::table($table)->where($cond)->get();
    }
   return $data;
}
public static function uploadFile($filename,$files)
{
    $original_name      =$filename->getClientOriginalName();
    //$original_extension =$filename->getClientOriginalExtension();
    //$original_size      =$filename->getClientSize();
    $file_name=substr(time(), 5,10).'_'.$original_name;
    if($filename->move(IMAGEURL, $file_name))
    {
        return $file_name;
    } 
    else
    {
        return 0;
    }   
    

}

/*
// for resize image
*/
public static function resize_crop_image1($max_width, $max_height, $source_file, $dst_dir, $quality = 100) {
    $imgsize = getimagesize($source_file);
    $width = $imgsize[0];
    $height = $imgsize[1];
    $mime = $imgsize['mime'];
    switch ($mime) {
        case 'image/gif':
            $image_create = "imagecreatefromgif";
            $image = "imagegif";
            break;
        case 'image/png':
            $image_create = "imagecreatefrompng";
            $image = "imagepng";
            $quality = 7;
            break;
        case 'image/jpeg':
            $image_create = "imagecreatefromjpeg";
            $image = "imagejpeg";
            $quality = 80;
            break;
        default:
            return false;
            break;
    }

 

    $dst_img = imagecreatetruecolor($max_width, $max_height);

    ///////////////

 

    imagealphablending($dst_img, false);

    imagesavealpha($dst_img, true);

    $transparent = imagecolorallocatealpha($dst_img, 255, 255, 255, 127);

    imagefilledrectangle($dst_img, 0, 0, $max_width, $max_height, $transparent);

 

 

    /////////////

    $src_img = $image_create($source_file);

 

    $width_new = $height * $max_width / $max_height;

    $height_new = $width * $max_height / $max_width;

    //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa

    if ($width_new > $width) {

        //cut point by height

        $h_point = (($height - $height_new) / 2);

        //copy image

        imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);

    } else {

        //cut point by width

        $w_point = (($width - $width_new) / 2);

        imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);

    }

 

    $image($dst_img, $dst_dir, $quality);

 

    if ($dst_img)

        imagedestroy($dst_img);

    if ($src_img)

        imagedestroy($src_img);

}

/*
* for return valid slug data
*/
public static function slug($title)
{

// replace non letter or digits by -

$url = preg_replace('~[^\\pL\d]+~u', '-', $title);

// trim url

$url = trim($url, "-");

// lowercase url

$url = strtolower($url);

// remove unwanted characters

$url = preg_replace('~[^-\w]+~', '', $url);

//Add timestamp to url for preventing duplicacy

//$url = $url."-".time();

// return url to function.

return $url;

}

/*
for generate coupon codes
*/
public static function couponGenerate()
{

    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $res = "";

    for ($i = 0; $i < 7; $i++) {

        $res .= $chars[mt_rand(0, strlen($chars) - 1)];

    }

    return $res;

}



}