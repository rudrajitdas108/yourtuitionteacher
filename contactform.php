<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CONTACT YourTuitionTeacher.in</title>
	<script type="text/javascript" src="validation1.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">YourTuitionTeacher.in</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        </li><li class="nav-item">
          <a class="nav-link" href="contactform.php">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<section class="my-5">
	<div class="py-5">


		<h2 class="text-center">FEEDBACK</h2>
	</div>
<div class="container-fluid">
	<div class="w-50 m-auto">
	  <form action="userinfo.php" method="post">
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text" name="user" autocomplete="off" class="form-control" id="input1">
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
			<label>MESSAGE</label>
			<input type="text" name="message" autocomplete="off" class="form-control" id="input4">
		</div>
        <button type="submit" class="btn btn-success" onclick="return valid()">SUBMIT</button>
	  </form>
    </div>
 </div>
</section>



<footer>
	<h4 class="py-2 bg-dark text-white text-center">@GNIT IT DEPT WITH COLLAB WITH SHIKHARTY</h4>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src.="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>