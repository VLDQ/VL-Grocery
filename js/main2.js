/*------------------
	To Top Button
--------------------*/
//Get the button
topbutton = document.getElementById("topBtn");

//When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	topbutton.style.display = "block";
  } else {
	topbutton.style.display = "none";
  }
}

//When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; //For Safari
  document.documentElement.scrollTop = 0; //For Chrome, Firefox, IE and Opera
}


/*------------------
	Slideshow
--------------------*/
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}


/*------------------
	Show Password
--------------------*/
function showPasswordFunction() {
  var x = document.getElementById("my_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


/*----------------------------
	Show Confirm Password
------------------------------*/
function showConfirmPasswordFunction() {
  var x = document.getElementById("my_confirmpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


/*-----------------------
	Validate Password
-------------------------*/
function validatePassword() {
  var my_password = document.getElementById("my_password");
  
  var num = my_password.value.match(/[0-9]/);
  var uppercase = my_password.value.match(/[A-Z]/);
  var lowercase = my_password.value.match(/[a-z]/);
  var specialChar = my_password.value.match(/[^\w]/);
  var pwLength = my_password.value.length;
  
  if(!num || !uppercase || !lowercase || !specialChar || pwLength < 8) {
	my_password.setCustomValidity("Passwords must contain at least one number, one uppercase letter, one lowercase letter, one special character, and at least 8 or more characters!");
  } else {
    my_password.setCustomValidity('');
  }	
}


/*-------------------------------
	Validate Confirm Password
---------------------------------*/
function validateConfirmPassword(){	
  var my_password = document.getElementById("my_password"), my_confirmpassword = document.getElementById("my_confirmpassword");
  
  if(my_password.value != my_confirmpassword.value) {
    my_confirmpassword.setCustomValidity("Passwords do not match!");
  } else {
    my_confirmpassword.setCustomValidity('');
  }
}


/*-----------------------
	Validate First Name
-------------------------*/
function validateFirstName() {
  var my_firstname = document.getElementById("my_firstname");
  
  var firstName = my_firstname.value.match(/^[a-zA-Z ]*$/);
  
  if(!firstName) {
	my_firstname.setCustomValidity("Only alphabets and whitespace are allowed!");
  } else {
    my_firstname.setCustomValidity('');
  }	
}


/*-----------------------
	Validate Last Name
-------------------------*/
function validateLastName() {
  var my_lastname = document.getElementById("my_lastname");
  
  var lastName = my_lastname.value.match(/^[a-zA-Z ]*$/);
  
  if(!lastName) {
	my_lastname.setCustomValidity("Only alphabets and whitespace are allowed!");
  } else {
    my_lastname.setCustomValidity('');
  }	
}


/*-----------------------
	Validate H/P Number
-------------------------*/
function validateHpNumber() {
  var my_hpnumber = document.getElementById("my_hpnumber");
  
  var digit = my_hpnumber.value.match(/^[0-9]+$/);
  var hpLength = my_hpnumber.value.length;
  
  if(!digit) {
	my_hpnumber.setCustomValidity("Only digits are allowed!");
  } 
  else {
	  if(hpLength < 10 || hpLength > 11) {
		my_hpnumber.setCustomValidity("H/P NUMBER should be either 10 or 11 digits in length!");
	  }
	  else {
		my_hpnumber.setCustomValidity('');  
	  }
  }	
}
