@extends('layouts/template')

@section('title')
    Login, Registration
@endsection('title')

@section('centar')
        <div class="indexMenu relative heightFull">
            <div class="menuText productPage" id="drink">
                <div id="foodText"><p>As we step into a new decade, MARCO launches a new way to experience lunch by Belgrade. Available in the restaurant from Friday to Sunday, ‘The MARCO to Lunch’ entails an abridged version of MARCO’s signature offering, with a fish course crafted especially for the four course menu. The same unique and delicate flavours by Chef Mako Milivojevic in a more succinct service.
                </p></div>
                <ul id="food">
                    @foreach ($data as $item)
                    @component('front.partials.products',["item"=>$item])

                    @endcomponent
                    @endforeach
                    </ul>


                    <ul id="paginacija">
                    @for($i=1;$i<=ceil($data->total()/7);$i++)
                    <li><a @if($i==1) class="pagination active"@else class="pagination" @endif href="page={{$i}}">{{$i}}</a></li>
                    @endfor
                    </ul>


                <input type="hidden" name="page" id="hidden_page" value="1" />
                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="idProducts" />
            </div>
        </div>

@endsection

        @section('javascript')
        @parent
        <script type="text/javascript" src="{{asset('js/pagination.js')}}"></script>

        @endsection('javascript')

