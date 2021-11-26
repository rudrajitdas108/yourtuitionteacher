function valid() {
	var name=document.getElementById("input1").value;
	if(name===''){
		alert("USERNAME field is empty");
		return false;
	}
	var phn=document.getElementById("input2").value;
	if(phn===''){
		alert("contact number field is empty");
		return false;
	}
	if(phn.length!==10)
	{
		alert("invalid contact number lenghth");
		return false;
	}
	if(isNaN(phn)) {
		alert("invalid input");
		return false;
	}
	var email=document.getElementById("input3").value;
	var dot=email.lastIndexOf(".");
	var at=email.indexOf("@");
	if(email==='') {
		alert("email field is empty");
		return false;
	}
	if(at<5||dot<at+5||dot+3>=email.length)
	{
		alert("Invalid email");
		return false;
	}
	var message=document.getElementById("input4").value;
	if(message===''){
		alert("message field is empty");
		return false;
	}
} 