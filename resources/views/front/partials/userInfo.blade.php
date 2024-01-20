<ul class="userReservation userReservationInfo">
    <li><?=$item->Indication?></li>
    <li><?=$item->dateReservation?></li>
    <li><?=$item->timereservation?></li>
    <li><?=$item->peoplenumber?></li>
    <li>
    @if($item->idStatus==1)
        <span class='wait'><i class='fa fa-circle'></i></span> {{$item->status}}
    @elseif($item->idStatus==3)
        <span class='sell'>  <i class='fa fa-circle'></i></span> {{$item->status}}
    @else
        <span class='error'><i class='fa fa-circle'></i></span> {{$item->status}}
    @endif
    </li>
</ul>
