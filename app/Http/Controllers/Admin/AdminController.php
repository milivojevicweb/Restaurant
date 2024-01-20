<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Reservation;
class AdminController extends Controller
{
    private $contact;

    public function __construct()
    {
        $contact=new Contact();
        $count=$contact->contactNumber();
        $this->data['contactNumber']=$count;

        $reservation=new Reservation();
        $countPendingReservation=$reservation->countPendingReservation();
        $this->data['countPendingReservation']=$countPendingReservation;


    }
    public function page(){
        return view("layouts.admin",$this->data);
    }
}
