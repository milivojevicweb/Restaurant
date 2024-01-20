@extends('layouts/template')

@section('title')
    News
@endsection('title')

@section('centar')

<div id="oneNews" class="relative">
    <div id="oneNewsImage">
        <img src="{{asset('images/'.$news->path)}}" alt={{$news->alt}}>
        <h2>{{$news->header}}</h2>
    </div>
    <div>
    </div>
</div>
<div id="oneNewsContent" class="relative">
    {!! $news->content !!}
</div>

@endsection('centar')

@section('javascript')
<script type="text/javascript" src="{{ asset('js/header.js')}}"></script>
@parent
@endsection('javascript')
