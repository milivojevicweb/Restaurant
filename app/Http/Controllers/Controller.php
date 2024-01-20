<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Reservation;
use App\Models\Products;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $data = [];

    public function __construct(){
        try{
            $model=new Reservation();
            $modelProduct=new Products();
            $category=$modelProduct->getCategory();
            $timeReservation=$model->timeReservation();
            $peopleNumber=$model->peopleNumber();
            $this->data['category']=$category;
            $this->data['timereservation']=$timeReservation;
            $this->data['peoplenumber']=$peopleNumber;
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }


}
