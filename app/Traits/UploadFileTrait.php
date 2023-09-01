<?php

namespace App\Traits;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;


trait UploadFileTrait{
  public function  Upload(Request $request,$foldername){
   $file=$request->file('photo')->getClientOriginalName();
   $path=$request->file('photo')->storeAs($foldername,$file,'imgs');
   return $path;
  }
}


?>