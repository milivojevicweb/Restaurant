@extends('layouts.admin')

@section('adminCentar')
<div class="tabcontent" id="Products">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Header</th>
                <th>Created at</th>
                <th>Updatet at</th>
                <th>Edit</th>
                <th>Delete at</th>
            </tr>
        </thead>
        <tbody id="newsAdmin">
        @foreach($news as $item)
        @component('admin.partials.news',["item"=>$item])

        @endcomponent
        @endforeach

        </tbody>
    </table>
</div>
@endsection
