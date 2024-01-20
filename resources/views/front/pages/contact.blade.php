@extends('layouts/template')

@section('title')
    Contact
@endsection('title')

@section('centar')
<div class="indexMenu relative ">
            <div class="menuImage">
                <p>Contact</p>
                <img src="{{ asset('images/contact.jpg')}}" alt="marco restaurant"/>
            </div>
            <div class="menuText">
            <form action="{{ url('/contact') }}" method="POST">
                <ul class="contactForm">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <li>To get in touch with the MARCO team simply fill out the contact form below.</li>
                    <li><input class="con" id="name" name="name" type="text" placeholder="Name" @if(session()->has('user')) value="{{ session()->get("user")->Name." ".session()->get("user")->lastName }}" @endif></li>
                    <li><input class="con" id="phone" name="phone" type="text" placeholder="Phone number"></li>
                    <li><input class="con" id="email" name="email" type="email" placeholder="Email" @if(session()->has('user')) value={{ session()->get("user")->email }} @endif></li>
                    <li><input class="con" id="text" name="text" type="text" placeholder="Message"></li>
                    <li><button type="submit" name="sendContact">SUBMIT</button></li>
                </ul>
            </form>
            </div>
        </div>


        <div class="indexMenu relative ">
            <div class="menuText">
                <ul id="location">
                    <li class="headInfromation">WORKING TIME</li>
                    <li>Monday - Thursday</li>
                    <li>11:00 AM - 9:00 PM</li>
                    <li>Friday - Saturday</li>
                    <li>11:00 AM - 5:00 PM</li>
                    <li class="headInfromation">INFORMATION</li>
                    <li><i class="fa fa-envelope"></i> restaurant@marco.com</li>
                    <li><i class="fa fa-phone"></i> +38163 111 1111</li>
                    <li><i class="fa fa-map-marker"></i> Ipsum Street, Lorem Tower, MO, Columbia, 508000</li>

                </ul>
            </div>
            <div class="menuImage">
                <p>Information</p>
                <img src="{{ asset('images/contact2.jpg')}}" alt="marco restaurant"/>
            </div>
        </div>
        <div id="maps">
            <iframe title="Marko Milivojevic Google Maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45629.609254926276!2d20.92586445847393!3d44.37465854544939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750cefff31a5049%3A0xe05e28b1c5d95b71!2z0KHQvNC10LTQtdGA0LXQstGB0LrQsCDQn9Cw0LvQsNC90LrQsA!5e0!3m2!1ssr!2srs!4v1701650566576!5m2!1ssr!2srs" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

@endsection('centar')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/validation.js')}}"></script>
@parent
@endsection('javascript')
