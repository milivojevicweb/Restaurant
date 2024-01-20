@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="kontakt">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Text</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="contactAdminTable">
            @foreach($contact as $item)
            @component('admin.partials.contact',["item"=>$item])

            @endcomponent
            @endforeach
        </tbody>
    </table>
</div>
@endsection
