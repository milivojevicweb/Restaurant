@extends('layouts/template')

@section('title')
    Login, Registration
@endsection('title')

@section('centar')
<div class="indexMenu relative ">
            <div class="menuImage">
                <p>Login</p>
                <img src="{{asset('images/login.jpg')}}" alt="marco restaurant"/>
            </div>
            <div class="menuText">
                <form method="POST" action="{{ url('/login') }}">
                    <ul class="contactForm marginForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <li><input id="loginEmail" class="login" name="loginEmail" type="email" placeholder="Email"></li>
                        <li><input id="loginPassword" class="login" name="loginPassword" type="password" placeholder="Password"></li>
                        @isset($errors)
                            @foreach($errors->all() as $error)
                                    {{ $error }}
                            @endforeach
                        @endisset

                        @if(session()->has('message'))
                            {{ session('message') }}
                        @endif
                        <li><button   name='login' type="submit">SUBMIT</button></li>
                    </ul>
                </form>
            </div>
        </div>


        <div class="indexMenu relative ">
            <div class="menuText">
            <form method="POST" action="{{ url('/registration') }}">
                <ul class="contactForm marginForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <li><input class="reg" id="regName" type="text" name="regName" placeholder="Name"></li>
                    <li><input class="reg" id="regLastName" type="text" name="regLastName" placeholder="Last name"></li>
                    <li><input class="reg" id="regEmail" type="email" name="regEmail" placeholder="Email"></li>
                    <li><input class="reg" id="regPassword" type="password" name="regPassword" placeholder="Password"></li>
                    <li><input class="reg" id="repeatPassword" type="password" name="repeatPassword" placeholder="Repat Password"></li>
                    <li><button name='registration' type="submit">SUBMIT</button></li>
                </ul>
                </form>
            </div>
            <div class="menuImage">
                <p>Registration</p>
                <img src="{{ asset('images/registration.jpg') }}" alt="marco restaurant"/>
            </div>
        </div>

@endsection

@section('javascript')
@parent
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validation.js')}}"></script>

@endsection('javascript')
