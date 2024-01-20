@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="crud">
    <div class="dateActivity">
        <div id="filterDateButton"> Filter Date</div>
        <div class="dateDiv">
            <input type="date" class="dateFirst"/>

        </div>
    </div>
    <table class="table marginTable">
        <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Ip address</th>
                <th>Date</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody id="tbodyUser">
        @foreach($activity as $item)
        @component('admin.partials.userActivity',["item"=>$item])

        @endcomponent
        @endforeach

        </tbody>
    </table>
</div>

@endsection
