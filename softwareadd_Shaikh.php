<!DOCTYPE html>
<html lang="eng">
 <head>
  <title>Projects</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
  </head>
 <body>	
	<header>
		<h1>Shaikh Software</h1>
		<h3>Welcome</h3>
	</header>
	<article>
		Add your Software
	</article>
<form action="softwareview_Shaikh.php" method="POST">
		<table>
			<tr><td></td><td>Enter

            </td></tr>
			<tr><td>Software id</td><td><input type="number" name="softwareid"></td></tr>
			<tr><td>Software Version</td><td><input type="text"  name="software_version"></td></tr>
			<tr><td>Operating System</td><td><input type="text" name="operating_system"></td></tr>
			<tr><td></td><td><input type="submit" value="Submit"></td></tr>
		</table>
</form>

 </body>
 <footer>
    <nav>
        <ul>
            <li><a href="index_Shaikh.html">Home</a></li>
            <li><a href="customerview_Shaikh.php">View: Customer Info</a></li>
				<li><a href="customeradd_Shaikh.php">Add: Customer Info</a></li>
				<li><a href="softwareview_Shaikh.php">View: Software Info</a></li>
                
                <li><a href="softdescripview_Shaikh.php">View: Software Description</a></li>
                <li><a href="softdescripadd_Shaikh.php">Add: Software Description</a></li>
                <li><a href="all_id_view_Shaikh.php">View: All Id's</a></li>
                <li><a href="all_id_add_Shaikh.php">Add: All Id's</a></li>
        </ul>
    </nav>
</footer>
</html>