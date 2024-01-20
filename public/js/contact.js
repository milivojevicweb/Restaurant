$(document).ready(function() {
    $(document).on('blur','input:text',checkContact);
});
function checkContact(){
var name=document.querySelector('#name').value;
var email=document.querySelector('#email').value;
var phone=document.querySelector('#phone').value;
var text=document.querySelector('#textarea').value;

var errors = [];
var reName=/^[A-ZŽŠĐČĆ][a-zžšđčć]{1,30}\s[A-ZŽŠĐČĆ][a-zžšđčć]{1,30}$/;
var reEmail=/^\w+([.-]?[\w\d]+)*@\w+([.-]?[\w]+)*(\.\w{2,4})+$/;
var rePhone =/^[0-9]*$/;


    if(text == "") {
        validno = false;
        error("#text");
    } else {
        success("#text");
        
    }

    if(name == "") {
        validno = false;
        error("#name");
        
    } else if(!reName.test(name)) {
        validno = false;
        error("#name");
    } else {
        success("#name");
    }

    if(email == "") {
        validno = false;
        error("#email");
        
    } else if(!reEmail.test(email)) {
        validno = false;
        error("#email");
    } else {
        success("#email");
    }

    if(phone == "") {
        validno = false;
        error("#phone");
        
    } else if(!rePhone.test(phone)) {
        validno = false;
        error("#phone");
    } else {
        success("#phone");
    }


}

function error(name){
    $(name).addClass("errorReg");
    $(name).removeClass("successReg");
}

function success(name){
    $(name).removeClass("errorReg");
    $(name).addClass("successReg");
}