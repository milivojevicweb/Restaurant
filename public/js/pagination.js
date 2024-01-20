$(document).ready(function(){
    scrollFunction();
    menu();
    toggleFilters();
    range();


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



    function fetch_data(page, query,range,category)
    {
     $.ajax({
      url:"/products/fetch_data?page="+page+"&query="+query+"&range="+range+"&category="+category,
      dataType:"json",
      success:function(data)
      {
          console.log(data.total);
          console.log(Math.ceil(data.total/7));
        let html = "";
        for(let item of data.data){
            html += `<li><a class='menuLink productText' href='products/${item.idProducts}'>${item.name} - $${item.price}</a></li>`
        }
        $("#food").html(html);

        pagIspis="";
        for(var i=1;i<=Math.ceil(data.total/7);i++){
            if(page==i){
                pagIspis+=`<li><a class="pagination active"  href="page=${i}">${i}</a></li>`;
            }else{
                pagIspis+=`<li><a class="pagination"  href="page=${i}">${i}</a></li>`;
            }
        }

        $("#paginacija").html(pagIspis);

      }
     })
    }

    $(document).on('keyup', '#searchProduct', function(){
     var query = $('#searchProduct').val();
     var page = $('#page').val();
     var range = $('#myRange').val();
     var category = $('#productCategory').val();
     fetch_data(page, query,range,category);
    });

    $(document).on('change', '#myRange', function(){
        var query = $('#searchProduct').val();
        var range = $('#myRange').val();
        var page = $('#page').val();
        var category = $('#productCategory').val();
        fetch_data(page, query,range,category);
    });

    $(document).on('change', '#productCategory', function(){
        var query = $('#searchProduct').val();
        var range = $('#myRange').val();
        var page = $('#page').val();
        var category = $('#productCategory').val();
        fetch_data(page, query,range,category);
    });


    $(document).on('click', '.pagination ', function(event){
     event.preventDefault();
     var page = $(this).attr('href').split('page=')[1];
     $('#page').val(page);
     var query = $('#searchProduct').val();
     var range = $('#myRange').val();
     var category = $('#productCategory').val();
     fetch_data(page,query,range,category);
    });

   });

   function range(){
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
}
