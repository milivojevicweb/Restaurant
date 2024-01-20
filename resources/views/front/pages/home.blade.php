@extends('layouts/template')

@section('title')
    Home
@endsection('title')

@section('centar')
<div id="slajder" class="relative"><img src="{{ asset('images/logo2.png')}}" alt="logo"></div>

<div class="indexMenu relative">
    <div class="menuText">
        <h2>MENU</h2>
        <p>A progression of rare and beautiful ingredients where texture, flavour and harmony is paramount. Delve into the MARCO dining experience with Marko Milivojevic’s Ten Course Menu and thoughtfully curated Wine List by Fink Wine Director Amanda Yallop, and MARCO Head Sommelier, Shanteh Wong.</p>
        <a class="homeButton"  href="{{ url('/products') }}">VIEW MORE</a>
    </div>
    <div class="menuImage">
        <img src="{{ asset('images/Website-Menu-Image.jpg')}}" alt="marco restaurant"/>
    </div>
</div>
<div class="indexMenu relative">
    <div class="menuImage">
        <img src="{{ asset('images/1584562134contact.jpg')}}" alt="marco restaurant"/>
    </div>
    <div class="menuText">
        <h2>NEWS</h2>
        <p>All the latest breaking news on Food. Browse The Independent's complete collection of articles and commentary on Food.</p>
        <a class="homeButton" href="{{ url('/news') }}">VIEW MORE</a>
    </div>
</div>
<div class="indexMenu relative">
    <div class="menuText">
        <h2>EVENTS</h2>
        <p>Celebrate at one of Serbia’s most awarded restaurants, with panoramic views encompassing the Ada Bridge and Belgrade Waterfront. From intimate dinner parties in the Private Dining Room, to large cocktail events in The Green Room.</p>
        <a class="homeButton" href="{{ url('/contact') }}">VIEW MORE</a>
    </div>
    <div class="menuImage">
        <img src="{{ asset('images/event.jpg')}}" alt="marco restaurant"/>    </div>
</div>


@endsection('centar')

@section('javascript')
@parent
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>

@endsection
