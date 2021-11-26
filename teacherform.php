<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM YourTuitionTeacher.in</title>
	<script type="text/javascript" src="validation2.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script>
  	var html='<p /> <div><input type="text" name="pinr" autocomplete="off" class="form-control"><a href="#" id="remove">REMOVE</a></div>';
  	var maxRows=4;
  	var x=1;
  	$(document).ready(function(e){
  		$("#add").click(function(e){
  			if (x<=maxRows) {
  				$("#container").append(html);
  				x++;
  			}
  		})
        $("#container").on('click','#remove',function(e){
        	$(this).parent('div').remove();
        	x--;
        })
  	})
  	var html2='<p /> <div><input type="text" name="SUBJECT" autocomplete="off" class="form-control"><a href="#" id="add2">REMOVE</a></div>';
  	var maxRows2=4;
  	var x2=1;
  	$(document).ready(function(e){
  		$("#add2").click(function(e){
  			if (x2<=maxRows2) {
  				$("#container2").append(html2);
  				x2++;
  			}
  		})
        $("#container2").on('click','#remove',function(e){
        	$(this).parent('div').remove();
        	x2--;
        })
  	})
  	var html3='<p /> <div><select id="category"><option>SELECT FROM BELOW</option><option>KINDERGARDEN (KG,LKG,UKG)</option><option>JUNIOR SCHOOL(STD I-V)</option><option>SECONDARY SCHOOL (VI-X)</option><option>HIGHER SECONDARY (STD XI-XII)</option><option>COLLEGE</option><option>UNIVERSITY</option></select><a href="#" id="add3">REMOVE</a></div>';
  	var maxRows3=1;
  	var x3=1;
  	$(document).ready(function(e){
  		$("#add3").click(function(e){
  			if (x3<=maxRows3) {
  				$("#container3").append(html3);
  				x3++;
  			}
  		})
        $("#container3").on('click','#remove',function(e){
        	$(this).parent('div').remove();
        	x3--;
        })
  	})
  </script>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">YourTuitionTeacher.in</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="index.php" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="teacherform.php">Teacher Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactform.php">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">TEACHER's APPLICATION FORM</h2>
	</div>
<div class="container-fluid">
<div class="w-50 m-auto">
	<form action="daconnection.php" method="post">
		<div class="form-group">
			<label>NAME</label>
			<input type="text" name="username" autocomplete="off" class="form-control" id="input1">
		</div>
		<div class="form-group" id="radio2">
			<input type="radio" name="gender" autocomplete="" class="#" value="male"> MALE
			<input type="radio" name="gender" autocomplete="" class="#" value="female"> FEMALE
		</div>
		<div class="form-group">
			<label>AGE</label>
			<input type="text" name="age" autocomplete="off" class="form-control" id="input14">
		</div>
		<div class="form-group">
			<label>CONTACT NUMBER</label>
			<input type="text" name="number" autocomplete="off" class="form-control" id="input2">
		</div>
		<div class="form-group">
			<label>EMAIL</label>
			<input type="text" name="email" autocomplete="off" class="form-control" id="input3">
		</div>
		<div class="form-group">
			<label>ADDRESS</label>
			<input type="text" name="address" autocomplete="off" class="form-control" id="input4">
		</div>
		<div class="form-group">
			<label>HIGHEST QUALIFICATION</label>
			<input type="text" name="highqualification" autocomplete="off" class="form-control" id="input5">
		</div>
		<div class="form-group">
			<label>YEAR OF PASSING</label>
			<input type="text" name="year" autocomplete="off" class="form-control" id="input6">
		</div>
        <div class="form-group">
			<label>COURSE/STREAM/HONOURS</label>
			<input type="text" name="course" autocomplete="off" class="form-control" id="input7">
		</div>
		<div class="form-group">
			<label>COLLEGE/SCHOOL NAME</label>
			<input type="text" name="institution" autocomplete="off" class="form-control" id="input8">
		</div>
		<div class="form-group">
			<label>BOARD/UNIVERSITY NAME</label>
			<input type="text" name="boarduniver" autocomplete="off" class="form-control" id="input9">
		</div>
		
		<div class="form-group">
			<label>YEARS OF EXPERIENCE</label>
			<input type="number" name="experience" autocomplete="off" class="form-control" id="input10">
		</div>
		<div class="form-group" id="container">
			<label>ENTER THE PIN CODE (AREA) OF TEACHING</label>
			<input type="text" name="pinr" autocomplete="off" class="form-control" id="input11">
			<a href="#" id="add">ADD MORE</a>
		</div>
		<div class="contact-form" id="container3">
			<label>SELECT THE CLASS</label>
			<select id="dropdown" name="class">
		    <option value=" ">SELECT FROM BELOW</option>
			<option value="kindergarden">KINDERGARDEN (KG,LKG,UKG)</option>
			<option value="juniorSchool">JUNIOR SCHOOL(STD I-V)</option>
			<option value="secondary">SECONDARY SCHOOL (VI-X)</option>
			<option value="higherSecondary">HIGHER SECONDARY (STD XI-XII)</option>
			<option value="coll">COLLEGE</option>
			<option value="univer">UNIVERSITY</option>
            </select>
            <a href="#" id="add3">ADD MORE</a>
		</div>
		<p />
		<div class="form-group" id="container2">
			<label>SUBJECT NAME</label>
			<input type="text" name="subject" autocomplete="off" class="form-control" id="input12">
			<a href="#" id="add2">ADD MORE</a>
		</div>
		
		<div>
			<input type="checkbox" id="checkbox">I agree that all the information are true.
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success" onclick="return valid()">SUBMIT</button>
			<p \>
			<p \>
		</div>

	</form>
</div>
</div>
</section>

<footer>
	<h4 class="py-2 bg-dark text-white text-center">@GNIT IT DEPT WITH COLLAB WITH SHIKHARTY</h4>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</body>
</html>

