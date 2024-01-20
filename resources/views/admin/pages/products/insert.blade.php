@extends('layouts.admin')

@section('adminCentar')
            <div class="tabcontent" id="addProduct">
                <div class="menuText">
                <form method="POST" action="{{url('/admin/products/insertProducts')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <ul class="contactForm adminProduct marginForm">
                        <li>
                            <input type="hidden" name="idSkriveno" />
                            <button type="button" onclick="document.getElementById('profilePhoto').click()" class="dugmeFile inputForm">Add photo</button>
                            <span id="profilePhotoValue"></span>
                            <input class="prod" type="file" name="image" id="profilePhoto" style="display:none;" onchange="document.getElementById('profilePhotoValue').innerHTML=this.value;"/>
                        </li>
                        <li><input class="prod" id="alt" name="alt" type="text" placeholder="Alt..."></li>
                        <li><input class="prod" id="productName" name="productName" type="text" placeholder="Name"></li>
                        <li><input class="prod" id="productPrice" name="productPrice" type="text" placeholder="Price"></li>
                        <li>
                            <select class="prod" id="productCategory" name="productCategory" >
                                <option value="0">Choose...</option>
                            @foreach($category as $item)
                            @component('admin.partials.productsCategory',["item"=>$item])

                            @endcomponent
                            @endforeach
                            </select>
                        </li>
                        <li><input class="prod" id="productsText" name="productsText" type="textarea" rows="7" maxlength="1000" placeholder="Text..."></li>

                        <li><button type="submit" class="inputForm" name="addProduct">SUBMIT</button></li>
                    </ul>
                    </form>
                    @isset($errors)
                    @foreach($errors->all() as $error)
                            {{ $error }}
                    @endforeach
                @endisset

                @if(session()->has('message'))
                    {{ session('message') }}
                @endif
                </div>
            </div>
            @endsection
