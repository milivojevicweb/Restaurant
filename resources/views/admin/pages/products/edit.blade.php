@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="addProduct">
    <div class="menuText">
        <form method="POST" action="{{url('/admin/products/edit/updateProduct')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <ul class="contactForm adminProduct marginForm">
            <li><img id="productImageEdt"src="{{asset('images/'.$editProduct->path)}}" alt="{{$editProduct->alt}}"/></li>
            <li>
                    <input type="hidden" name="idSkriveno" />
                    <button class="buttonImageAdmin inputForm" type="button" onclick="document.getElementById('profilePhoto').click()" class="dugmeFile">Update photo</button>
                    <span id="profilePhotoValue"></span>
                    <input class="prod" type="file" name="image" id="profilePhoto"  style="display:none;" onchange="document.getElementById('profilePhotoValue').innerHTML=this.value;"/>
                </li>
                <li><input type="hidden" name="id" value={{$editProduct->idProducts}}></li>
                <li><textarea name="name">{{$editProduct->name}}</textarea></li>
                <li><textarea name="text">{{$editProduct->textProduct}}</textarea></li>
                <li><input type="text" name="price" placeholder="Name" value={{$editProduct->price}}></li>
                <li><input type="text" name="alt" value="{{$editProduct->alt}}"></li>
                <li><select name="category">
                    @foreach($categoryProduct as $item)
                    @component('admin.partials.productsCategory',["item"=>$item])

                    @endcomponent
                    @endforeach
                </select></li>
                <li><button name="editProducts" class="buttonImageAdmin inputForm"type="submit">SUBMIT</button></li>
            </ul>
        </form>
    </div>
</div>

@endsection
