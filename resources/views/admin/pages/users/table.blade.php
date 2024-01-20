@extends('layouts.admin')

@section('adminCentar')
            <div class="tabcontent" id="User">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="usersAdmin">
                    @foreach($users as $item)
                    @component('admin.partials.users',["item"=>$item])

                    @endcomponent
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endsection
