<header id="heder">

    <div id="rowHeader">
        <div id="mySidenav" class="sidenav">
            <a class="closebtn" id="meniLinkClose">&times;</a>

            <a id='meniHover'href="{{ url('/') }}">HOME</a>
            <a id='meniHover'href="{{ url('/products') }}">MENU</a>
            <a id='meniHover'href="{{ url('/news') }}">NEWS</a>
            <a id='meniHover'href="{{ url('/contact') }}">CONTACT</a>




                @if(!session()->has('user'))

                <a href="{{ url('/login') }}" class="nav-link">LOGIN</a>

                @elseif(session()->get("user")->idUserLevel==2)

                <a id='meniHover'href="{{ url('/admin') }}">ADMINISTRATOR</a>
                <a id='meniHover' href="{{ url('/user') }}">User</a>
                <p id='login'>
                    <i class='fa fa-user-circle-o'></i>
                    {{ session()->get("user")->Name }}
                    {{ session()->get("user")->lastName }}
                </p>
                <a href="{{ url('/logout') }}" class="nav-link">LOGOUT</a>

                @else

                <a id='meniHover' href="{{ url('/user') }}">User</a>
                <p id='login'>
                    <i class='fa fa-user-circle-o'></i>
                    {{ session()->get("user")->Name }}
                    {{ session()->get("user")->lastName }}
                </p>

                <a href="{{ url('/logout') }}" class="nav-link">LOGOUT</a>

                @endif

                <a id='meniHover'href="{{ url('/author') }}">AUTHOR</a>



        </div>



        <span id="meniLinkOpen">
            <div id="hamburger">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </div>
        </span>
        <div id="logo">
            <a href="{{url('/')}}"><img src="{{ asset('images/logoSmall.png')}}" alt="logo"/></a>
        </div>


<div id="headerText">
    <p id="adminUserName">{{ session()->get("user")->Name }} {{ session()->get("user")->lastName }}</p> <i class='fa fa-user-circle-o'></i>

</div>

@if(session()->has('message'))
<div id="info">
    <p>{{ session('message') }}</p>
</div>
@endif
@isset($errors)
@foreach($errors->all() as $error)
<div id="info">
        {{ $error }}
    </div>
@endforeach
@endisset

</header>


<h1 id="h1">Marco restaurant menu food drink dessert</h1>
