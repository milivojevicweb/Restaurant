$(document).ready(function() {
    reservationMenu();

    setTimeout(function() {
        $('#info').hide()
      }, 2000);

});





function reservationMenu(){
    document.querySelector("#buttonReservation").addEventListener("click",function(){
        document.getElementById("reservationDiv").style.width = "400px";
    });

      document.querySelector("#exitButtonReservation").addEventListener("click",function(){
        document.getElementById("reservationDiv").style.width = "0";
    });
}
