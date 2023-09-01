<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use App\Traits\UploadFileTrait;
use App\Traits\PersonalInfoTrait;
use App\Http\Requests\PersonalDataRequest;
use Ghanem\LaravelSmsmisr\Facades\Smsmisr;

class PersonalInfoController extends Controller
{
    // use trait to handle function inn controller 

    use PersonalInfoTrait;
    use UploadFileTrait;
 
 


   public function index()
    {
      return $this->index_trait();
    }

   


 
    public function create()
    {
        return $this->create_trait();
    
    }

    
 


   public function store(Request $request)
    {
      



  return $this->store_trait($request);
        
    }

 


   public function edit($id)
    {
        return $this->edit_trait($id);
    }

   
    public function update(Request $request, PersonalInfo $personalInfo)
    {
        return $this->update_trait();
    }

    public function destroy($id)
    {
        return $this->destroy_trait($id);
    }

    public function send() {
        Smsmisr::send("hello world", "01017008257");  
    }
}
