$(document).ready(function(){
    $("input.login").keyup(checkLogin);
    $("input.reg").keyup(checkRegistraiton);
    $("input.con").keyup(checkContact);
    $("input.con,div,select,span").keyup(addProductsValidation);
})

function checkLogin(){
    
    var email=document.querySelector('#loginEmail').value;
    var password=document.querySelector('#loginPassword').value;

    var errors = [];
    var reEmail=/^\w+([.-]?[\w\d]+)*@\w+([.-]?[\w]+)*(\.\w{2,4})+$/;
    var rePassword =/^(?=.*\d)(?=.*[A-zČĆŽŠĐčćžšđ])(?=.*[~!@#$%^&*<>?]).{6,}$/;
    var reText=/[a-z]/;


    if(email == "") {
        validno = 1;
        error("#loginEmail");
    }else if(!reEmail.test(email)){
        validno = 1;
        error("#loginEmail");

    } else {
        success("#loginEmail");
        
    }

    if(password == "") {
        validno = 1;
        error("#loginPassword");
        
    } else if(!rePassword.test(password)) {
        validno = 1;
        error("#loginPassword");
    } else {
        success("#loginPassword");
    }



}

function checkRegistraiton(){
    var name=document.querySelector('#regName').value;
    var lastName=document.querySelector('#regLastName').value;
    var email=document.querySelector('#regEmail').value;
    var password=document.querySelector('#regPassword').value;
    var repeatPassword=document.querySelector('#repeatPassword').value;

    var rePassword =/^(?=.*\d)(?=.*[A-zČĆŽŠĐčćžšđ])(?=.*[~!@#$%^&*<>?]).{6,}$/;
    var reName=/^[A-ZČĆŽŠĐ][a-zčćžšđ]{1,14}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{1,14})*$/;
    var reLastName=/^[A-ZČĆŽŠĐ][a-zčćžšđ]{1,14}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{1,14})*$/;
    var reEmail=/^\w+([.-]?[\w\d]+)*@\w+([.-]?[\w]+)*(\.\w{2,4})+$/;

    if(email == "") {
        validno = 1;
        error("#regEmail");
    }else if(!reEmail.test(email)){
        validno = 1;
        error("#regEmail");

    } else {
        success("#regEmail");
        
    }
    if(name == "") {
        validno = 1;
        error("#regName");
    }else if(!reName.test(name)){
        validno = 1;
        error("#regName");

    } else {
        success("#regName");
        
    }

    if(lastName == "") {
        validno = 1;
        error("#regLastName");
    }else if(!reLastName.test(lastName)){
        validno = 1;
        error("#regLastName");

    } else {
        success("#regLastName");
        
    }


    if(password == "") {
        validno = 1;
        error("#regPassword");
        
    } else if(!rePassword.test(password)) {
        validno = 1;
        error("#regPassword");
    } else {
        success("#regPassword");
    }
    if(repeatPassword==""){
        error("#repeatPassword");
    }else if(repeatPassword==password){
        success("#repeatPassword");
    }
    else{
        error("#repeatPassword");
    }
}

function checkContact(){

    var name=document.querySelector('#name').value;
    var email=document.querySelector('#email').value;
    var phone=document.querySelector('#phone').value;
    var text=document.querySelector('#text').value;

    var errors = [];
    var reName=/^[A-ZŽŠĐČĆ][a-zžšđčć]{1,30}\s[A-ZŽŠĐČĆ][a-zžšđčć]{1,30}$/;
    var reEmail=/^\w+([.-]?[\w\d]+)*@\w+([.-]?[\w]+)*(\.\w{2,4})+$/;
    var rePhone =/^[0-9]*$/;
    var reText=/[a-z]/;


    if(text == "") {
        validno = 1;
        error("#text");
    }else if(!reName.test(name)){
        validno = 1;
        error("#text");

    } else {
        success("#text");
        
    }

    if(name == "") {
        validno = 1;
        error("#name");
        
    } else if(!reName.test(name)) {
        validno = 1;
        error("#name");
    } else {
        success("#name");
    }

    if(email == "") {
        validno = 1;
        error("#email");
        
    } else if(!reEmail.test(email)) {
        validno = 1;
        error("#email");
    } else {
        success("#email");
    }

    if(phone == "") {
        validno = 1;
        error("#phone");
        
    } else if(!rePhone.test(phone)) {
        validno = false;
        error("#phone");
    } else {
        success("#phone");
    }

    if(validno==1){
        return false;
    }else{
        return true;
    }

}
function addProductsValidation(){
    var name=document.querySelector('#productName').value;
    var alt=document.querySelector('#alt').value;
    var price=document.querySelector('#productPrice').value;
    var text=document.querySelector('#productsText').value;
    var cat=document.querySelector('#productCategory').value;
    var images=document.querySelector('#profilePhotoValue').value;

    var errors = [];
    var reAlt=/[a-z]/;
    var reName=/[a-z]/;
    var rePrice =/^[0-9]*$/;
    var reText=/[a-z]/;

    if(text == "") {
        validno = 1;
        error("#productsText");
    }else if(!reText.test(text)){
        validno = 1;
        error("#productsText");

    } else {
        success("#productsText");
        
    }
    if(images==""){
        error("#profilePhotoValue");
    }else{
        success("#profilePhotoValue");
    }

    if(name == "") {
        validno = 1;
        error("#productName");
        
    } else if(!reName.test(name)) {
        validno = 1;
        error("#productName");
    } else {
        success("#productName");
    }

    if(alt == "") {
        validno = 1;
        error("#alt");
        
    } else if(!reAlt.test(alt)) {
        validno = 1;
        error("#alt");
    } else {
        success("#alt");
    }

    if(price == "") {
        validno = 1;
        error("#productPrice");
        
    } else if(!rePrice.test(price)) {
        validno = false;
        error("#productPrice");
    } else {
        success("#productPrice");
    }
    if(cat==0){
        error("#productCategory");
    }else{
        success("#productCategory");
    }
    
    if(validno==1){
        return false;
    }else{
        return true;
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