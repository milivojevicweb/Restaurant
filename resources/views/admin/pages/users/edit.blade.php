@extends('layouts.admin')
@section('adminCentar')
<div class="tabcontent" id="addProduct">
    <div class="menuText">
    <form method="POST" action="{{ url('/admin/user/edit/updateUser') }}">
        <ul class="contactForm adminProduct marginForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$user->idUsers}}">
            <li><input class="reg" id="regName" type="text" name="name" value="{{$user->Name}}" placeholder="Name"></li>
            <li><input class="reg" id="regLastName" type="text" name="lastName" value="{{$user->lastName}}" placeholder="Last name"></li>
            <li><input class="reg" id="regEmail" type="email" name="email" value="{{$user->email}}" placeholder="Email"></li>
            <li><select name="level">
                <option value="0">Chosee...</option>
                @foreach ($level as $item)
                @component('admin.partials.userLevel',["item"=>$item])

                @endcomponent
                @endforeach
            </select></li>
            <li><button name='user' class="inputForm" type="submit">SUBMIT</button></li>
        </ul>
        </form>
    </div>
    </div>@endsection
