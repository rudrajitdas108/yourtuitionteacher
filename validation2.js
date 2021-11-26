function valid() {
	var name=document.getElementById("input1").value;
	if(name===''){
		alert("NAME field is empty");
		return false;
	}
	var gender=document.getElementById("radio2").value;
	if(gender===''){
		alert("gender field is empty");
		return false;
	}
	var age=document.getElementById("input14").value;
	if(age===''){
		alert("age field is empty");
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
	var address=document.getElementById("input4").value;
	if(address===''){
		alert("address field is empty");
		return false;
	}
	var highqua=document.getElementById("input5").value;
	if(highqua===''){
		alert("highest quqlification field is empty");
		return false;
	}
	var yearofpass=document.getElementById("input6").value;
	if(yearofpass===''){
		alert("yearofpassing field is empty");
		return false;
	}
	var course=document.getElementById("input7").value;
	if(course===''){
		alert("course field is empty");
		return false;
	}
    var schoolcollege=document.getElementById("input8").value;
	if(schoolcollege===''){
		alert("school/college field is empty");
		return false;
	}
	var univerboard=document.getElementById("input9").value;
	if(univerboard===''){
		alert("university/board field is empty");
		return false;
	}
	var yofexp=document.getElementById("input10").value;
	if(yofexp===''){
		alert("year of experience field is empty");
		return false;
	}
	var pin=document.getElementById("input11").value;
	if(pin===''){
		alert("pin code field is empty");
		return false;
	}
	var dropdown=document.getElementById("dropdown").value;
	if(dropdown===" "){
		alert("subject details field is empty");
		return false;
	}
	var sub=document.getElementById("input12").value;
	if(sub===''){
		alert("subject field is empty");
		return false;
	}
	
	if(!this.teacherform.checkbox.checked){
		alert("you missed the checkbox");
		return false;
	}
	
	
    
} 