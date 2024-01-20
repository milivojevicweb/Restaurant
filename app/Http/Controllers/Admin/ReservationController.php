<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use App\Models\Reservation;
use Illuminate\Database\QueryException;

class ReservationController extends AdminController
{


    public function getReservation(){
        $model=new Reservation();
        $reservation=$model->getReservation();
        $this->data['reservation']=$reservation;
        return view('admin.pages.reservation.table',$this->data);
    }

    public function getAjaxReservation(){
        $model=new Reservation();
        $reservation=$model->getReservation();
        return response()->json($reservation);
    }

    public function deleteReservation($id){
        if(isset($id)){
            try{
                $model=new Reservation();
                $reservation=$model->deleteReservation($id);

            }catch(QueryException $ex) {
                return redirect()->back()->with('message','Database error!');
                \Log::error($ex->getMessage());
            }
        }
    }

    public function editStatusInfo($id){
        $model=new Reservation();
        $reservation=$model->getReservationId($id);
        if (!$reservation) {
            abort(404);
        }
        $status=$model->getStatus();
        $this->data['reservation']=$reservation;
        $this->data['status']=$status;
        return view('admin.pages.reservation.editStatus',$this->data);
    }

    public function updateStatus(StatusRequest $request){
        if ($request->has('statusButton')) {

            $status=$request->input('status');
            $id=$request->input('id');
            if($status==0){
                return redirect()->back()->with('message','Status must be selected!');
            }
            $model=new Reservation();

            try{

                $update=$model->updateStatus($id,$status);

                if($update){
                    return \redirect("/admin/reservation")->with('message','Reservation is successfully updated.');
                } else {
                    return redirect()->back()->with('message','Reservation is not successfully updated.');
                }

            }catch(QueryException $ex) {
                return redirect()->back()->with('message','Database error!');
                \Log::error($ex->getMessage());
            }
        }
    }
}
