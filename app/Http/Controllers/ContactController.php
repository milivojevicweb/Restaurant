<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\UserActivity;
class ContactController extends Controller
{

    public function page(){
        return view('front.pages.contact',$this->data);
    }
    public function insertContact(ContactRequest $request){
        if ($request->has('sendContact')) {

            $contact = new Contact();
            $name=$request->input('name');
            $email=$request->input('email');
            $phone=$request->input('phone');
            $text=$request->input('text');

            try{

                $result=$contact->insertContact($name,$email,$phone,$text);

                if(session()->has('user')){

                $userActivity=new UserActivity();
                $user=session()->get("user");
                $ip=request()->ip();
                $date=date("Y-m-d");
                $dateTime=date("Y-m-d H:i:s");
                $activity="Send Message";
                $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);

            }

            if($result){
                return redirect()->back()->with('message','Your message has been successfully sent.');
            }else{
                return redirect()->back()->with('message','Your Text Messages Are Not Delivered!');
            }

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Database error.');
                \Log::error($ex->getMessage());
            }
        }

    }
}
