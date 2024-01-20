@extends('layouts/template')
@section('title')
User
@endsection
@section('centar')
    <div id="userPage" class="relative ">
                <div id="userBody">
                    <ul id="userInformation">
                        <li><p>User Informations:</p></li>
                        <li><p>{{$userpage->name." ".$userpage->lastName}}</p></li>
                        <li><p>{{$userpage->email}}</p></li>
                        <li><p>{{$userpage->level}}</p></li>
                        <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="userButton">Edit Info</button></li>
                        <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="userButton">Edit Password</button></li>
                    </ul>
                    <div id="id01" class="modal">
                        <div class="userForm">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> <p>Edit Password</p>
                            <form method="POST" action="{{ url('/user/updateUserPassword') }}">
                                <ul class="contactForm adminProduct marginForm">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <li><input class="reg" id="password" type="password" name="password" placeholder="Password"></li>
                                    <li><input class="reg" id="repeatPassword" type="password" name="repeatPassword" placeholder="Repat Password"></li>
                                    <li><button name='updatePassword' class="inputForm" type="submit">SUBMIT</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div id="id02" class="modal">
                        <div class="userForm">
                            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> <p>Edit User Information</p>
                            <form method="POST" action="{{ url('/user/updateUserInfo') }}">
                                <ul class="contactForm adminProduct marginForm">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <li><input class="reg" id="name" type="text" name="name" placeholder="Name" value="{{$userpage->name}}"></li>
                                    <li><input class="reg" id="lastName" type="text" name="lastName" value="{{$userpage->lastName}}" placeholder="Last name"></li>
                                    <li><input class="reg" id="email" type="email" name="email" placeholder="Email" value="{{$userpage->email}}"></li>
                                    <li><button name='userUpdate' class="inputForm" type="submit">SUBMIT</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <ul class="userReservation">
                            <li>Indication</li>
                            <li>Date Reservation</li>
                            <li>Time Reservation</li>
                            <li>People Number</li>
                            <li>Reservation Status</li>
                        </ul>

                    @foreach($reservation as $item)
                        @component('front.partials.userInfo',["item"=>$item])

                        @endcomponent
                    @endforeach
                </div>
    </div>
@endsection
@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
@endsection('javascript')

