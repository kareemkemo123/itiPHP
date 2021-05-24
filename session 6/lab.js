/**********************Globals*************************/
unFilledMsg = "Please, Write a correct data.";

/******************************************************/
/*********************First Div************************/
/******************************************************/

/*********************Username*************************/
var username = document.getElementById('username');

username.addEventListener('keyup', fnName);

/*******************Password*********************/
var password = document.getElementById('password');

password.addEventListener('keyup', fnPass);

/*****************PhoneNumber**************************/
var phone = document.getElementById('phone');

phone.addEventListener('keyup', fnPhone);

/**************email**************/
var email = document.getElementById('email');
email.addEventListener('keyup', fnPass);
/**************date***************/
var date = document.getElementById('date');
var dateHandler = document.getElementById('dateHandler');
/*************NextBtn*************/
{
let btn = document.getElementById('nextBtn');
btn.addEventListener('click', 
function (){
	if(username.value == '' || fnName()){
		username.classList.remove('filled');
		username.classList.add('unFilled');
		password.classList.add('filled');
		phone.classList.add('filled');
		email.classList.add('filled');
		date.classList.add('filled');
		nameHandler.innerHTML = unFilledMsg;
	}
	else if(password.value == '' || fnPass()){
		username.classList.add('filled');
		password.classList.remove('filled');
		password.classList.add('unFilled');
		phone.classList.add('filled');
		email.classList.add('filled');
		date.classList.add('filled');
		passwordHandler.innerHTML = unFilledMsg;
	}
	else if(phone.value == '' || fnPhone()){
		username.classList.add('filled');
		password.classList.add('filled');
		phone.classList.remove('filled');
		phone.classList.add('unFilled');
		email.classList.add('filled');
		date.classList.add('filled');
		phoneHandler.innerHTML = unFilledMsg;
	}
	else if(email.value == '' || fnEmail()){
		username.classList.add('filled');
		password.classList.add('filled');
		phone.classList.add('filled');
		email.classList.remove('filled');
		email.classList.add('unFilled');
		date.classList.add('filled');
		emailHandler.innerHTML = unFilledMsg;
	}
	else if (date.value == ''){
		username.classList.add('filled');
		password.classList.add('filled');
		phone.classList.add('filled');
		email.classList.add('filled');
		date.classList.remove('filled');
		date.classList.add('unFilled');	
		dateHandler.innerHTML = "Please, choose a date.";
	}
	else{
		document.getElementById('con1').hidden = 'hidden';
		document.getElementById('con2').hidden = '';
	}
});
}
/******************************************************/
/*********************Second Div***********************/
/******************************************************/

/*********************Pic Input************************/
var pic = document.getElementById('pic');

/****************Rememberme Checkbox*******************/
var rememberme = document.getElementById('rememberme');
var remembermeHandler = document.getElementById('remembermeHandler');
rememberme.addEventListener('click', function(){
	if(rememberme.checked){
		remembermeHandler.style.color = 'green';
		remembermeHandler.innerHTML = 'Checked';
	}
	else{
		remembermeHandler.innerHTML = '';
	}
});

/*******************Back Btn****************************/
{
let btn = document.getElementById('backBtn');
btn.addEventListener('click', 
function (){
	document.getElementById('con1').hidden = '';
	document.getElementById('con2').hidden = 'hidden';
});
}

/*******************Register Btn************************/
{
let btn = document.getElementById('regBtn');
btn.addEventListener('click', 
function (){
	var picHandler = document.getElementById('picHandler');
	if(pic.value == ''){
		picHandler.style.textAlign = 'left';
		picHandler.innerHTML = "A photo required";
	}
	else{
		document.getElementById('con2').hidden = 'hidden';
		document.getElementById('info').hidden = '';
	}
});

btn.addEventListener('click', 
function (){
	document.getElementById('usernameData').innerHTML  = username.value;
	document.getElementById('phoneData').innerHTML 	   = phone.value	  ;
	document.getElementById('emailData').innerHTML     = email.value   ;
	document.getElementById('birthdayData').innerHTML  = date.value	  ;
	document.getElementById('picData').innerHTML       = pic.value	  ;
	document.getElementById('remembermeData').innerHTML= rememberme.checked;
});
}
/******************************************************/
/**********************Third Div***********************/
/******************************************************/

/**********************Return Btn***********************/
{
let btn = document.getElementById('returnBtn');
btn.addEventListener('click', 
function (){
	document.getElementById('info').hidden = 'hidden';
	document.getElementById('con1').hidden   = '';
});
}

/****************Functions*************/
function containAnUppChar(str){
	n = str.length;
	for(i = 0; i < n; i++){
		if(str[i].charCodeAt(0) <= 90 && str[i].charCodeAt(0) >= 65)
			return 1;
	}
	return 0;
}
function containAt(str){
	return str.indexOf('@');
}
nameHandler = document.getElementById('usernameHandler');
function fnName(){
	if(!isNaN(parseInt(username.value)) || username.value == ''){
		nameHandler.innerHTML = "NOT string";
		return 1;
	}
	else{
		document.getElementById('usernameHandler').innerHTML = '';
		return 0;
	}
}
passHandler = document.getElementById('passwordHandler');
function fnPass(){
	var n = passHandler;
	if(password.value.length < 8 || !containAnUppChar(password.value)){
		n.innerHTML = "Weak, Please enter 8 char at least and one uppercase char at least";
		n.style.color = 'red';
		return 1;
	}
	else{
		n.innerHTML = "Strong";
		n.style.color = 'green';
		return 0;
	}
}
phoneHandler = document.getElementById('phoneHandler');
function fnPhone(){
	var nn = phoneHandler;
	var n = phone.value.length;
	if(n != 11 || isNaN(parseInt(phone.value)) || isNaN(parseInt(phone.value[n - 1]))){
		nn.innerHTML = "INVALID phone number";
		return 1;
	}
	else if(phone.value.substring(0, 3) != "012" &&phone.value.substring(0, 3) != "010" &&phone.value.substring(0, 3) != "011" &&phone.value.substring(0, 3) != "015"){
		nn.innerHTML = "INVALID phone number";
		return 1;
	}
	else{
		nn.innerHTML = "";
		return 0;
	}
}
emailHandler = document.getElementById("emailHandler");
function fnEmail(){
	var n = emailHandler;
	if(containAt(email.value) == -1){
		n.innerHTML = 'Enter an e-mail address';
		return 1;
	}
	else{
		n.innerHTML = '';
		return 0;
	}
}