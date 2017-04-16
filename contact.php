<!DOCTYPE html>

<head>
	<title>Contact - Taste-Of-India</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.html"><img class="logo" src="images/logo.gif" width="513" height="84" alt="" title=""></a>
<!--			<a href="index.html"><img  src="images/waitress.png" width="332" height="205" alt="" title=""></a>-->
			<ul class="navigation">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="taste.html">Menu</a>
				</li>
				<li>
					<a class="active" href="contact.php">Contact</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
		<div>
			<div>
			<h1>Contact</h1>
			<h2>List of contacts and phone numbers </h2>
			<?php
$file = fopen("contact.txt",'r');
echo "<table border=1 width=100%><tr><th>Name </th><th>Email</th><th>Contact Number</th></tr>";
while (!feof($file))
{
    $line = trim(fgets($file));
    if ($line)
    {
    	$array = explode(";",$line);
    	echo "<tr>";
    	for($x = 0; $x <count($array) ; $x++){    	
        echo "<td>".$array[$x]."</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
fclose($file);
?>
			</div>
			</div>
			<div>
				<div>
					
					<h4>Comments and Suggestions? Just fill in the form below.</h4>
					<form action="message.php" method="POST">
						<label for="name"> <span class="text">Your Name:</span>
							<input type="text" name="name" id="name">
						</label>
						<label for="email"> <span>Your E-mail:</span>
							<input type="text" name="email" id="email">
						</label>
						<label for="subject"> <span>Subject:</span>
							<input type="text" name="subject" id="subject">
						</label>
						<label for="message"> <span>Your Message:</span>
							<textarea name="message" id="message"></textarea>
						</label>
						<input type="submit" value="">
					</form>
				</div>
			</div>
			
		</div>
		<div class="sidebar">
			<h1>Open Everyday</h1>
			<span>including holidays</span> <span>from 8AM until 1AM</span>
			<h1>Address</h1>
			<span>Taste-Of-India</span> <span>33 Sunol Street</span> <span>San Jose, CA 95110</span>
			<h1>Phone Number</h1>
			<span>123-4567-890</span>
			<h1>Open Everyday</h1>
			<span>including holidays</span> <span>from 8AM until 1AM</span>  </div>
	</div>
	<div id="footer">
		<div>
			<ul>
				
				<li>
					
					<ul class="navigation">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="taste.html">Menu</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
					
				</li>
				
			</ul>
		</div>
	</div>
</body>
</html>