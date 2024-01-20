@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="reservation">
    <table class="table ">
        <thead>
            <tr>
                <th>Indication</th>
                <th>Date Reservation</th>
                <th>Time Reservation</th>
                <th>People Number</th>
                <th>User Name</th>
                <th>Reservation Status</th>
                <th>Edit Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="reservationAdmin">
        @foreach($reservation as $item)
        @component('admin.partials.reservation',["item"=>$item])

        @endcomponent
        @endforeach

        </tbody>
    </table>
</div>
@endsection
