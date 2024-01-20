@extends('layouts.template')

@section('title')
    Author
@endsection('title')

@section('centar')
<div class="indexMenu relative ">
            <div class="menuImage">
                <p>Author</p>
                <img src="{{ asset('images/autor.jpg') }}" alt="marco restaurant"/>
            </div>
            <div class="menuText oneProductText">
                <ul>
                    <li class='productHeader'>Marko Milivojević</li>
                    <li class='productHeader'><a class="homeButton" href="{{ asset('dokumentacija.pdf') }}">DOKUMENTACIJA</a></li>
                    <li><hr class="oneProductLine"></li>
                    <li>Zovem se Marko Milivojević. Rodjen sam 3.8.1998. u Smederevskoj Palanci. Student sam Visoke ICT škole. Završio sam srednju Mašinsko-elektrotehničku školu GOŠA.Broj indeksa: 167/17</li>
                </ul>
            </div>
        </div>
@endsection('centar')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
@parent
@endsection('javascript')
