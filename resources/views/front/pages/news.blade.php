@extends('layouts/template')

@section('title')
    News
@endsection('title')

@section('centar')

<div id="newsPage" class="relative">
    @foreach ($data as $item)
    @component('front.partials.news',["item"=>$item])

    @endcomponent
    @endforeach
</div>

@endsection('centar')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
@parent
@endsection('javascript')
