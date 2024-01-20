$(document).ready(function(){
    document.getElementById("heder").style.backgroundColor="#000";
    document.getElementById("logo").style.visibility="unset";
    window.onscroll = function() {scrollFunction()};
    menu();

    document.getElementById("filterButton").style.display = "none";
    document.getElementById("filters").style.display = "none";

    setTimeout(function() {
        $('#info').hide()
      }, 2000);


});


function scrollFunction() {

    if(220<document.body.scrollTop||200<document.documentElement.scrollTop){
        document.getElementById("heder").style.position="fixed";
        document.getElementById("heder").style.backgroundColor="#000";
        document.getElementById("logo").style.visibility="unset";
        document.getElementById("heder").style.boxShadow="0 0 10px rgba(0,0,0,.8)";

    }else{
        document.getElementById("heder").style.position="absolute";
        document.getElementById("heder").style.backgroundColor="#000";
        document.getElementById("heder").style.transition="0.5s";
        document.getElementById("logo").style.visibility="unset";
        document.getElementById("heder").style.boxShadow="0 0 10px rgba(0,0,0,.8)";
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

