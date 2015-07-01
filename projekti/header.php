<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sea World</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="kontenti-fluid headeri">
	<div class="kontenti">
		<div id="logo">
			<p id="sea">Sea</p>
			<p id="world">World</p>
		</div> 	
		<div id="menu">
			<ul class="lista">
				<li  class="active"><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li>News</li>
				<li>Services</li>
				<li><a href="contact.php">Contact</a></li>
				<input type="search" id="mySearch" placeholder="Search ">
				<p id="demo"></p>

				<script>
				function myFunction() {		
    			var x = document.getElementById("mySearch").placeholder;
    			document.getElementById("demo").innerHTML = x;
				}
				</script>
			</ul>
		</div>
 	</div>
</div>