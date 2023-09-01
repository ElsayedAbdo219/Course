<?php

namespace App\Traits;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use App\Traits\UploadFileTrait;
use App\Http\Requests\PersonalDataRequest;

trait PersonalInfoTrait{

  use UploadFileTrait;

///////////////////////////////////////////////////////////////////////////////
   // index
    public function index_trait(){
     $persons=PersonalInfo::latest()->take(5)->get();
     return view("PersonalData.index",compact('persons'));
    }
///////////////////////////////////////////////////////////////////////////////
    // create 
    public function create_trait(){
     return view("PersonalData.create");
    }
///////////////////////////////////////////////////////////////////////////////

    // store within using PersonalDataRequest for request and validation

    public function store_trait(Request $request){
      // use upload function  in uploadfile trait 
      // $path=$this->Upload($request,'persons');

      if($request->has('photo')){
        $file_name=time().".".$request->photo->extension();
        $request->photo->move('images',$file_name);
      }

      //create elequent
      $persons=PersonalInfo::create([
      'name'=>$request->name,
      'address'=>$request->address,
      'photo'=>$file_name,
      'is_married'=>$request->status,
      ]);
      return redirect()->route('personal_data.index');
  }
  
///////////////////////////////////////////////////////////////////////////////
// Edit
    public function edit_trait($id){
    $persons=PersonalInfo::where('id',$id)->first();
    return view("PersonalData.edit",compact('persons'));
     }
///////////////////////////////////////////////////////////////////////////////
    public function update_trait(Request $request,$id){
 


  }
///////////////////////////////////////////////////////////////////////////////


   public function destroy_trait($id){
   PersonalInfo::destroy($id);
  
   }
}

?>