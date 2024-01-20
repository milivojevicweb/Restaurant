$(document).ready(function(){
    products();
    toggleFilters()
    console.log("radi");
    document.getElementById("heder").style.backgroundColor="#000";
    document.getElementById("logo").style.visibility="unset";
    window.onscroll = function() {scrollFunction()};
    menu();
    range();
    document.querySelector("#searchProduct").addEventListener('keyup',pretraga);
    document.getElementById("myRange").addEventListener('change',filterCena);

});


function scrollFunction() {

    if(220<document.body.scrollTop||200<document.documentElement.scrollTop){
        document.getElementById("heder").style.position="fixed";
        document.getElementById("heder").style.backgroundColor="#000";
        document.getElementById("logo").style.visibility="unset";
        document.getElementById("heder").style.boxShadow="0 0 10px rgba(0,0,0,.8)";
        document.getElementById("filters").style.position="fixed";

    }else{
        document.getElementById("heder").style.position="absolute";
        document.getElementById("heder").style.backgroundColor="#000";
        document.getElementById("heder").style.transition="0.5s";
        document.getElementById("logo").style.visibility="unset";
        document.getElementById("heder").style.boxShadow="0 0 10px rgba(0,0,0,.8)";
        document.getElementById("filters").style.position="absolute";

    }

}

function menu(){
    document.querySelector("#meniLinkOpen").addEventListener("click",function(){
        document.querySelector("#mySidenav").style.width = "100%";
    });
    document.querySelector("#meniLinkClose").addEventListener("click",function(){
        document.querySelector("#mySidenav").style.width = "0";
    });
}
function toggleFilters(){
    $("#filters").hide();
    $("#filterButton").click(function(){
        $("#filters").toggle("500");
    });
}

function products(){
    $.ajax({
        url: 'index.php?page=print-ajax-products',
        method: 'GET',
        dataType: 'json',
        success: function(products, status, xhr){
            if(xhr.status === 200){
                printFood(products);
                printDessert(products);
                printDrink(products);
            }else{
                alert("Error");
            }
        },error:ajaxError
    })
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

function printFood(products){
    let html = "<ul>";
    for(let item of products[0].food){
        html += `<li><a class='menuLink' href='index.php?page=oneProduct&idProducts=${item.idProducts}'>${item.name} - $${item.price}</a></li>`
    }
    html+="</ul>";
    $("#food").html(html);
}

function printDessert(products){
    let html = "<ul>";
    for(let item of products[0].dessert){
        html += `<li><a class='menuLink' href='index.php?page=oneProduct&idProducts=${item.idProducts}'>${item.name} - $${item.price}</a></li>`
    }
    html+="</ul>";
    $("#dessert").html(html);
}

function printDrink(products){
    let html = "<ul>";
    for(let item of products[0].drink){
        html += `<li><a class='menuLink' href='index.php?page=oneProduct&idProducts=${item.idProducts}'>${item.name} - $${item.price}</a></li>`
    }
    html+="</ul>";
    $("#drink").html(html);
}


function pretraga() {
    const value=this.value;
    var price = document.getElementById("myRange").value;
    $.ajax({
      url:"index.php?page=ajax-products-filter",
      method:"POST",
      dataType:"JSON",
      data:{
        value:value,
        price:price

      },
      success:function(data){
        printFood(data);
        printDessert(data);
        printDrink(data);
      },
     error:ajaxError
    })




  }

  function filterCena() {
    var price = document.getElementById("myRange").value;
    var  value=$("#searchProduct").val();

    $.ajax({
      url:"index.php?page=ajax-products-filter",
      method:"POST",
      dataType:"JSON",
      data:{
        price:price,
        value:value

      },
      success:function(data){
        printFood(data);
        printDessert(data);
        printDrink(data);
      },
     error:ajaxError
    })
}

function range(){
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
}



