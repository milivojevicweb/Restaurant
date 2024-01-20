<tr>
    <td><img class="productImageTable"src="{{asset('images/'.$item->path)}}" alt="{{$item->alt}}"/></td>
    <td>{{$item->header}}</td>
    <td>{{ $item->created}}</td>
    <td>{{ $item->updated}}</td>
    <td><a class="delete" href={{ url("/admin/news/edit/$item->idNews") }}><i class="fa fa-cog"></i></a></td>
    <td><button class="delete deleteNews" data-idnews={{$item->idNews}}>x</button></td>
</tr>
