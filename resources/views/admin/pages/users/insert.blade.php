@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="addProduct">
<div class="menuText">
<form method="POST" action="{{ url('/admin/user/insertUser') }}">
    <ul class="contactForm adminProduct marginForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <li><input class="reg" id="regName" type="text" name="name" placeholder="Name"></li>
        <li><input class="reg" id="regLastName" type="text" name="lastName" placeholder="Last name"></li>
        <li><input class="reg" id="regEmail" type="email" name="email" placeholder="Email"></li>
        <li><select name="level">
            <option value="0">Chosee...</option>
            @foreach ($level as $item)
            @component('admin.partials.userLevel',["item"=>$item])

            @endcomponent
            @endforeach
        </select></li>
        <li><input class="reg" id="regPassword" type="password" name="password" placeholder="Password"></li>
        <li><input class="reg" id="repeatPassword" type="password" name="repeatPassword" placeholder="Repat Password"></li>
        <li><button name='user' class="inputForm" type="submit">SUBMIT</button></li>
    </ul>
    </form>
</div>
</div>
@endsection
