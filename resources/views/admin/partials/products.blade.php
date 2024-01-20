<tr>
    <td><img class="productImageTable"src="{{asset('images/'.$item->path)}}" alt="{{$item->alt}}"/></td>
    <td>{{$item->name}}</td>
    <td>{{ $item->price}}</td>
    <td>{{ $item->categories}}</td>
    <td>{{ $item->created}}</td>
    <td>{{ $item->updated}}</td>
    <td><a class="delete" href={{ url("/admin/products/edit/$item->idProducts") }}><i class="fa fa-cog"></i></a></td>
    <td><button class="delete deleteProducts" data-idproduct={{$item->idProducts}}>x</button></td>
</tr>
