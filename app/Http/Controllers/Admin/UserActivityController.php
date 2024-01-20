<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserActivity;
class UserActivityController extends AdminController
{

    public function userActivity(){
        $models=new UserActivity();
        $activity=$models->getActivity();
        $this->data['activity']=$activity;
        return view('admin.pages.useractivity\table',$this->data);
    }

    public function fetch_data(Request $request)
    {
     if($request->ajax())
     {
        $date = $request->get('date');
        $dateToday=date("Y-m-d");

        $models=new UserActivity();

        $data=$models->getActivityDate($date,$dateToday);

        return response()->json($data);
     }
    }
}
