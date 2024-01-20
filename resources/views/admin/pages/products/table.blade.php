@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="Products">
    <div class="dateActivity">
        <div id="filterDateButton"> Select Category</div>
        <div class="dateDiv">
            <select id="productCategory">
                <option value="0">All categories</option>
                @foreach($category as $item)
                @component('admin.partials.productsCategory',["item"=>$item])

                @endcomponent
                @endforeach
            </select>

        </div>
    </div>
    <table class="table marginTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="productsAdmin">
        @foreach($products as $item)
        @component('admin.partials.products',["item"=>$item])

        @endcomponent
        @endforeach

        </tbody>
    </table>
</div>
@endsection
