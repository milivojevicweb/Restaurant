<tr>
    <td>{{$item->Indication}}</td>
    <td>{{$item->dateReservation}}</td>
    <td>{{$item->timereservation}}</td>
    <td>{{$item->peoplenumber}}</td>
    <td>{{$item->Name." ".$item->lastName}}</td>
    <td>
        @if($item->idStatus==1)
            <span class='wait'><i class='fa fa-circle'></i></span> {{$item->status}}
        @elseif($item->idStatus==3)
            <span class='sell'>  <i class='fa fa-circle'></i></span> {{$item->status}}
        @else
            <span class='error'><i class='fa fa-circle'></i></span> {{$item->status}}
        @endif
    </td>
    <td><a href="{{url('admin/reservation/edit/'.$item->idReservation)}}">Edit Status</a></td>
    <td><button class="delete deleteReservation" data-idreservation={{$item->idReservation}}>x</button></td>
</tr>
