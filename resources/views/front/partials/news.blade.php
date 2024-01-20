<div class="oneNews imgSize">
    <div class="newsInfo">
        <p>{{$item->header}}</p>
        <hr>
        <p>{{$item->description}}</p>
        <a href="{{url('news/'.$item->idNews)}}">read more</a>
    </div>
    <img src="{{asset('images/'.$item->path)}}" alt={{$item->alt}}>
</div>
