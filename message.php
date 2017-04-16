<!DOCTYPE html>

<head>
	<title>Message - Taste-Of-India</title>
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
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="content">
			<div>
				<div>
					<h1>Message</h1>
					<?php
if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['subject'])&& isset($_POST['message'])) {
    $data = $_POST['name'] . '-' . $_POST['email'] .'-' . $_POST['subject'] .'-' . $_POST['message'] . "\n";
    $ret = file_put_contents('comments.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Error in processing request. Please try again later.');
    }
    else {
        echo "<h2> Thanks for your feedback. Your response has been recorded.</h2>";
    }
}
else {
   die('Error in processing request. Please try again later');
}
?>
				</div>
			</div>
		</div>
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