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
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="news.html">News</a>
				</li>
				<li>
					<a class="active" href="login.php">Login</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
		<div>
			<div>
			
			

<?php
$admin = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    if(!empty($_POST["admin"]) && !empty($_POST["password"])) 
	{
        $username = $_POST["admin"];
        $password = $_POST["password"];
        
        if($username == 'admin' && $password == 'password')
		{
            session_start();
            $_SESSION["authenticated"] = 'true';
			$file = fopen("securefile.txt",'r');
			echo "<h2>List of Username and Password </h2>";
            echo "<table border=1 width=100%><tr><th>username </th><th>password</th></tr>";
             while (!feof($file))
              {
                  $line = trim(fgets($file));
                   if ($line)
                      {
    	                  $array = explode(";",$line);
    	                  echo "<tr>";
    	                  for($x = 0; $x <count($array) ; $x++)
						{    	
                          echo "<td>".$array[$x]."</td>";
                        }
                           echo "</tr>";
                       }
               }
echo "</table>";
fclose($file);
        }

 else
				{
	 echo "<h2>Invalid Username/Password</h2>";
				}
	}
}
?>
</div>
</div>
</div>
</div>
</body>
</html>