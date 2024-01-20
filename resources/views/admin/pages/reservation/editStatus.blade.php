@extends('layouts.admin')

@section('adminCentar')
<div id="userPage" class="relative ">
    <div id="userBody">
    <form method="POST" action="{{url('admin/reservation/edit/updateReservation')}}">
        <ul class="userReservation">
                <li>Indication</li>
                <li>Date Reservation</li>
                <li>Time Reservation</li>
                <li>People Number</li>
                <li>Reservation Status</li>
                <li>Submit</li>
            </ul>



            <ul class="userReservation userReservationInfo">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="id" value="{{$reservation->idReservation}}"/>
            <li>{{$reservation->Indication}}</li>
            <li>{{$reservation->dateReservation}}</li>
            <li>{{$reservation->timereservation}}</li>
            <li>{{$reservation->peoplenumber}}</li>
            <li>
                <select name="status">
                <option value="0">Choose..</option>
                @foreach($status as $item)
                @component('admin.partials.editStatus',["item"=>$item])

                @endcomponent
                @endforeach
                </select>
            </li>
            <li><button type="submit" name="statusButton">Submit</button></li>
            </ul>
        </form>
    </div>
</div>
@endsection
