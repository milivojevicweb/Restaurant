<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends AdminController
{


    public function getContact(){
        $model = new Contact();
        $contact=$model->getContact();
        $this->data['contact']=$contact;
        return view('admin.pages.contact.table',$this->data);
    }

    public function getAjaxContact(){
        $model = new Contact();
        $contact=$model->getContact();
        return response()->json($contact);

    }

    public function deleteContact($id){
        if(isset($id)){

            $model = new Contact();

            try{
                $contact=$model->deleteContact($id);
            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }
        }
    }
}
