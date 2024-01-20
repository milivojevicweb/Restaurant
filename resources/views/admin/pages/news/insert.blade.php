@extends('layouts.admin')

@section('adminCentar')
            <div class="tabcontent" id="addProduct">
                <div class="menuText">
                <form method="POST" action="{{url('/admin/news/insertNews')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <ul class="contactForm adminProduct marginForm">
                        <li>
                            <input type="hidden" name="idSkriveno" />
                            <button type="button" class="inputNews" onclick="document.getElementById('profilePhoto').click()" class="dugmeFile">Add photo</button>
                            <span id="profilePhotoValue"></span>
                            <input class="prod" type="file" name="image" id="profilePhoto" style="display:none;" onchange="document.getElementById('profilePhotoValue').innerHTML=this.value;"/>
                        </li>
                        <li><input  class="prod inputNews" id="header" name="header" type="text" placeholder="Headers..."></li>
                        <li><input class="prod inputNews" id="description" name="description" type="text" placeholder="Description..."></li>
                        <li><input class="prod inputNews" id="alt" name="alt" type="text" placeholder="Alt..."></li>
                        <li><textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea></li>
                        <li><button type="submit" class="prod inputNews" name="addNews">SUBMIT</button></li>
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

            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'summary-ckeditor' );
            </script>

@endsection
