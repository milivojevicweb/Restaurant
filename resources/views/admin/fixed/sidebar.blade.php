<div class="relative" id="adminPanel">

    <div id="sidebar">

    <ul>
        <li><button  id="kontaktButton" id="defaultOpen" class="tablinks">Contact <span id="spanContactNumber">{{$contactNumber}}</span></button></li>
        <li class="buttonAdminContact" id="contactAdmin"><a href="{{ url('admin/contact')}}">Table</a></li>
        <li><button  id="ProductsButton" class="tablinks">Products</button></li>
        <li class="buttonAdminProduct" id="contactAdmin"><a href="{{ url('admin/products')}}">Table</a></li>
        <li class="buttonAdminProduct" id="contactAdmin"><a href="{{ url('admin/products/form-products')}}">Insert</a></li>
        <li><button  id="UserButton" class="tablinks">User</button></li>
        <li class="buttonAdminUser" id="contactAdmin"><a href="{{ url('admin/user')}}">Table</a></li>
        <li class="buttonAdminUser" id="contactAdmin"><a href="{{ url('admin/user/form-user')}}">Insert</a></li>
        <li><button id="ReservationButton" class="tablinks">Reservation <span id="spanReservationPending">{{$countPendingReservation}}</span></button></li>
        <li class="buttonAdminReservation" id="contactAdmin"><a href="{{ url('admin/reservation')}}">Table</a></li>
        <li><button  id="NewsButton" class="tablinks">News</button></li>
        <li class="buttonNews" id="contactAdmin"><a href="{{ url('admin/news')}}">Table</a></li>
        <li class="buttonNews" id="contactAdmin"><a href="{{ url('admin/news/form-news')}}">Insert</a></li>
        <li><button  id="userActivityButton" class="tablinks">Activity</button></li>
        <li class="buttonAdminUserActivity" id="contactAdmin"><a href="{{ url('admin/activity/user')}}">Table</a></li>
    </ul>
    </div>
