<tr>
    <td>{{ $item->name}}</td>
    <td>{{ $item->lastName}}</td>
    <td>{{ $item->email}}</td>
    <td>{{ $item->level}}</td>
    <td>{{ $item->created}}</td>
    <td>{{ $item->updated}}</td>
    <td><a class="edit" href={{ url("/admin/user/edit/$item->idUsers") }} ><i class="fa fa-cog"></i></a></td>
    <td><button class="delete deleteUsers" data-idusers={{$item->idUsers}}>x</button></td>
</tr>
