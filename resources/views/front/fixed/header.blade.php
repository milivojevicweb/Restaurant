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

                    <div id="reservationDiv" class="reservation">
                        <div id="resrvationPadding">
                            <form method="POST" action="{{ url('/reservation') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <span id="exitButtonReservation" class="closebtn">&times;</span>
                            <h2>MAKE A RESERVATION</h2>
                            <p>Please note you will receive a confirmation email once your reservation has been successful. If you do not receive this confirmation email there may have been an error in your reservation. Please contact our reservations team on 063-9251-5600 if you have any queries.</p>
                            <p class="fillFields">Please fill in all fields</p>
                            <span>Indication (Not mandatory)</span>

                            <input name="indication" type="text"/>


                            <select name="time">
                                @foreach($timereservation as $item)
                                    @component('front.partials.timeReservation',['item'=>$item])
                                    @endcomponent
                                @endforeach
                            </select>

                            <select name="people">
                                @foreach($peoplenumber as $item)
                                @component('front.partials.peopleNumber',['item'=>$item])

                                @endcomponent
                                @endforeach
                            </select>


                            <input name="dataTime" id="dataField" type="date"/>
                            @if(session()->has('user'))
                                <button name="sendReservation" class="homeButton" id="sendReservation"type="submit">Send</button>
                            @else
                                <a href="{{url('/login')}}" class="homeButton marginTop" id="sendReservation">Login/Registration</a>
                            @endif

                            </form>
                        </div>
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


            <div id="headetText">
                        <button id="filterButton"><i class="fa fa-filter"></i></button>
                        <button id='buttonReservation'>MAKE A RESERVATION</button>
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
        <div id="filters">
            <div id="search">
                    <input type="text" id="searchProduct" placeholder="Search..">
            </div>
            <div id="category">
                <select id="productCategory">
                    <option value="0">All category</option>
                    @foreach ($category as $item)
                        <option value="{{$item->idCategories}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div id="slidecontainer">
                    <input type="range" min="1" max="2000" value="2000" class="slider" id="myRange">
                    <p>prices range from 0 to <span id="demo"></span>$</p>
            </div>
        </div>

        <h1 id="h1">Marco restaurant menu food drink dessert</h1>
