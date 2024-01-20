<tr>
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <td>{{ $item->name}}</td>
    <td>{{ $item->email}}</td>
    <td>{{ $item->phone}}</td>
    <td>{{ $item->text}}</td>
    <td><button class="delete deleteContact" data-idcontact={{$item->idContact}}>x</button></td>
</tr>
