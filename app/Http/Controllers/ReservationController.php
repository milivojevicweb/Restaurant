<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use App\Models\UserActivity;
class ReservationController extends Controller
{
    public function insertReservation(ReservationRequest $request){
        if ($request->has('sendReservation')) {


            $idUser=session()->get("user")->idUsers;
            $indication=$request->input('indication');
            $time=$request->input('time');
            $people=$request->input('people');
            $dataTime=$request->input('dataTime');
            if($dataTime<date("Y-m-d")){
                return redirect()->back()->with("message", "Error Date!");

            }
            $status=1;

                try{

                $reservation = new Reservation();
                $result=$reservation->insertReservation($indication,$dataTime,$idUser,$time,$people,$status);

                    if($result){
                        if(session()->has('user')){
                            $userActivity=new UserActivity();
                            $user=session()->get("user");
                            $ip=request()->ip();
                            $date=date("Y-m-d");
                            $dateTime=date("Y-m-d H:i:s");
                            $activity="Make Reservation";
                            $userActivity->insert($user->idUsers,$ip,$date,$dateTime,$activity);
                        }
                        return redirect()->back()->with('message','Reservation is successfully Created');

                    }else{
                        return redirect()->back()->with('message','Reservation is not successfully Created');
                    }


                }catch(\Exception $ex) {
                    return redirect()->back()->with('message','Database error.');
                    \Log::error($ex->getMessage());
                }


        }else{
            return redirect()->back()->with("message", "You must be login ");
        }
    }
}
