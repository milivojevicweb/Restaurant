@extends('layouts/template')

@section('title')
    Login, Registration
@endsection('title')

@section('centar')
<div class="indexMenu relative ">
            <div class="menuImage">
                <p>{{$product->categories}}</p>
                <img src='{{asset('images/'.$product->path)}}' alt='{{$product->alt}}'/>
            </div>
            <div class="menuText oneProductText">
                <ul>

                    <li class='productHeader'>{{$product->name}} - ${{$product->price}}</li>

                <li><hr class="oneProductLine"></li>
                <li>{{$product->textProduct}}</li>
                </ul>
            </div>
        </div>


@endsection

@section('javascript')
@parent
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
@endsection('javascript')

