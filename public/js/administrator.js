$(document).ready(function() {
  $(document).on('click', '.deleteContact', deleteContact);
  $(document).on('click', '.deleteProducts', deleteProducts);
  $(document).on('click', '.deleteUsers', deleteUsers);
  $(document).on('click', '.deleteReservation', deleteReservation);
  $(document).on('click', '.deleteNews', deleteNews);

  $(document).on('change', '#productCategory', function(){
    var category=$("#productCategory").val();
    fetch_data_product(category)
});

  togleElementsForOrdes();
  setTimeout(function() {
    $('#info').hide()
  }, 2000);


});







  function deleteContact(){
    let id = $(this).data('idcontact');
    let token=$('meta[name="csrf-token"]').attr('content')
    $.ajax({
        url: '/admin/contact/deleteContact/'+id,
        method: 'DELETE',
        data: {
            _token:token
        },
        success: function(data){
            refreshContact();
        },
        error: ajaxError
    })

}
function refreshContact(){
  $.ajax({
      url: '/admin/contact/ajaxContact',
      method: 'GET',
      success: function(data){
          printContact(data);
          console.log(data);

      },
      error: ajaxError
  })
  }

function printContact(data){
  let html = "";
  for(let item of data){
    html += contact(item);
  }
  $("#contactAdminTable").html(html);
}

function contact(item){
  return `<tr>
            <td>${ item.name }</td>
            <td>${ item.email }</td>
            <td>${ item.phone }</td>
            <td>${ item.text }</td>
            <td><button class="delete deleteContact" data-idcontact="${item.idContact}">x</button></td>
          </tr>`;
}



function deleteProducts(){
  let id = $(this).data('idproduct');
  let token=$('meta[name="csrf-token"]').attr('content')
  $.ajax({
      url: '/admin/products/deleteProduct/'+id,
      method: 'DELETE',
      data: {
        _token:token
      },
      success: function(data){
          refreshProducts();
      },
      error: ajaxError
  })

}
function refreshProducts(){
$.ajax({
    url: '/admin/products/ajaxProducts',
    method: 'GET',
    success: function(data){
        printProducts(data);
    },
    error: ajaxError
})
}

function printProducts(data){
let html = "";
for(let item of data){
  html += products(item);
}
$("#productsAdmin").html(html);
}

function products(item){
return `<tr>
<td><img class="productImageTable" src="/images/${item.path}" alt="{{$item->alt}}"/></td>
<td>${item.name}</td>
<td>${item.price}</td>
<td>${item.categories}</td>
<td>${item.created}</td>
<td>${item.updated}</td>
<td><a class="delete" href="/admin/products/edit/${item.idProducts}"><i class="fa fa-cog"></i></a></td>
<td><button class="delete deleteProducts" data-idproduct=${item.idProducts}>x</button></td>
</tr>`;
}


function deleteUsers(){
  let id = $(this).data('idusers');
  let token=$('meta[name="csrf-token"]').attr('content')
  $.ajax({
      url: '/admin/user/deleteUser/'+id,
      method: 'DELETE',
      data: {
        _token:token
      },
      success: function(data){
          refreshUsers();
      },
      error: ajaxError
  })

}
function refreshUsers(){
$.ajax({
    url: '/admin/user/ajaxUsers',
    method: 'GET',
    success: function(data){
        printUsers(data);
    },
    error: ajaxError
})
}

function printUsers(data){
let html = "";
for(let item of data){
  html += Users(item);
}
$("#usersAdmin").html(html);
}

function Users(item){
return `<tr>
<td>${item.name}</td>
<td>${item.lastName}</td>
<td>${item.email}</td>
<td>${item.level}</td>
<td>${item.created}</td>
<td>${item.updated}</td>
<td><a class="edit" href="/admin/user/edit/${item.idUsers}"><i class="fa fa-cog"></i></a></td>
<td><button class="delete deleteUsers" data-idusers=${item.idUsers}>x</button></td>
</tr>`;
}


function deleteReservation(){
  let id = $(this).data('idreservation');
  let token=$('meta[name="csrf-token"]').attr('content')
  $.ajax({
      url: '/admin/reservation/deleteReservation/'+id,
      method: 'DELETE',
      data: {
        _token:token
      },
      success: function(data){
        refreshReservation();
      },
      error: ajaxError
  })
}
function refreshReservation(){
    $.ajax({
        url: '/admin/reservation/ajaxReservation',
        method: 'GET',
        success: function(data){
            printReservation(data);
        },
        error: ajaxError
    })
}

function printReservation(data){
let html = "";
for(let item of data){
    html+=`<tr>
    <td>${item.Indication}</td>
    <td>${item.dateReservation}</td>
    <td>${item.timereservation}</td>
    <td>${item.peoplenumber}</td>
    <td>${item.Name+' '+item.lastName}</td>
    <td>`;
    if(item.idStatus==1){
        html+=`<span class='wait'><i class='fa fa-circle'></i></span> ${item.status}`;
    }else if(item.idStatus==3){
        html+= `<span class='sell'>  <i class='fa fa-circle'></i></span> ${item.status}`;
    }else{
        html+= `<span class='error'><i class='fa fa-circle'></i></span> ${item.status}`;
    }
    html+=`</td>
    <td><a href=/admin/reservation/edit/${item.idReservation}>Edit Status</a></td>
    <td><button class="delete deleteReservation" data-idreservation=${item.idReservation}>x</button></td>
    </tr>`;
}
$("#reservationAdmin").html(html);
}

function deleteNews(){
    let id = $(this).data('idnews');
    let token=$('meta[name="csrf-token"]').attr('content')
    $.ajax({
        url: '/admin/news/deleteNews/'+id,
        method: 'DELETE',
        data: {
          _token:token
        },
        success: function(data){
          refreshNews();
        },
        error: ajaxError
    })
  }
  function refreshNews(){
      $.ajax({
          url: '/admin/news/ajaxNews',
          method: 'GET',
          success: function(data){
              printNews(data);
          },
          error: ajaxError
      })
  }

  function printNews(data){
  let html = "";
  for(let item of data){
      html+=`<tr>
      <td><img class="productImageTable" src="/images/${item.path}" alt="{{$item->alt}}"/></td>
      <td>${item.header}</td>
      <td>${item.created}</td>
      <td>${item.updated}</td>
      <td><a href=/admin/news/edit/${item.idNews}><i class="fa fa-cog"></i></a></td>
      <td><button class="delete deleteNews" data-idnews=${item.idNews}>x</button></td>
      </tr>`;
  }
  $("#newsAdmin").html(html);
  }


  function ajaxError(greska, status, statusText){
    console.error('GRESKA AJAX: ');
    console.log(status);
    console.log(statusText);
    if(greska.status == 500){
        console.log(greska.parseJSON);
        alert(greska.parseJSON.poruka);
    }
    else if(greska.status == 400){
        alert('Niste poslali ispravno parametre!')
    }
  }

  function togleElementsForOrdes(){
    $(".buttonAdminContact").hide();
    $("#kontaktButton").click(function(){
        $(".buttonAdminContact").toggle("1000");
    });

    $(".buttonAdminProduct").hide();
    $("#ProductsButton").click(function(){
        $(".buttonAdminProduct").toggle("1000");
    });

    $(".buttonAdminUser").hide();
    $("#UserButton").click(function(){
        $(".buttonAdminUser").toggle("1000");
    });

    $(".buttonAdminReservation").hide();
    $("#ReservationButton").click(function(){
        $(".buttonAdminReservation").toggle("1000");
    });

    $(".buttonAdminUserActivity").hide();
    $("#userActivityButton").click(function(){
        $(".buttonAdminUserActivity").toggle("1000");
    });

    $(".dateDiv").hide();
    $("#filterDateButton").click(function(){
        $(".dateDiv").toggle("1000");
    });

    $(".buttonNews").hide();
    $("#NewsButton").click(function(){
        $(".buttonNews").toggle("1000");
    });

}

$(document).on('change', '.dateFirst', function(){
    var date=$(".dateFirst").val();
    fetch_data(date)
});

function fetch_data_product(category)
{
 $.ajax({
  url:"/admin/products/fetch_data?category="+category,
  dataType:"json",
  success:function(data)
  {
    console.log(data);
    printProducts(data)



  },error:ajaxError
 })
}

function fetch_data(date)
{
 $.ajax({
  url:"/admin/activity/user/fetch_data?date="+date,
  dataType:"json",
  success:function(data)
  {
    console.log(data);
    printUserActivity(data)



  },error:ajaxError
 })
}

function printUserActivity(data){
    let html="";
    for(let item of data){
        html+=`
        <tr>
            <td>${item.idUsers}</td>
            <td>${item.Name} ${item.lastName}</td>
            <td>${item.ip}</td>
            <td>${item.dateTime}</td>
            <td>${item.activity}</td>
        </tr>
        `;
    }
    $("#tbodyUser").html(html);
}
