<!DOCTYPE html>
<html lang="eng">
 <head>
  <title>Projects</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
  <?php
$enter = TRUE; 
if (isset($_POST['descriptionid'])) {$descriptionid = $_POST['descriptionid'];} else {$enter = FALSE;}
if (isset($_POST['language_used'])) {$language_used = $_POST['language_used'];} else {$enter = FALSE;}
if (isset($_POST['release_date'])) {$release_date = $_POST['release_date'];} else {$enter = FALSE;}


$username = 'root';
$password = '';
$server = 'localhost';
$database = 'project_2';
$br = "<br/>";	
$conn = new mysqli($server, $username, $password, $database); 

if ($enter) {
    $query = "INSERT INTO software_description(descriptionid, language_used, release_date)";
    $query .= "VALUES('".$descriptionid."','".$language_used."','".$release_date."')";
    $conn->query($query);
}
    
$query = "SELECT * FROM software_description";
$rs = $conn->query($query);
$num = $rs->num_rows;
$conn->close();	
?>
</head>
<body>
	<table>
		<tr>
			<th>Description id</th>
			<th>Language Used</th>
			<th>Release Date</th>	
            		
		</tr>
	<?php
		$i=0;
		while ($i< $num) {
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			echo "<tr>";
			echo "<td>".$row["descriptionid"]."</td>";
			echo "<td>".$row["language_used"]."</td>";
			echo "<td>".$row["release_date"]."</td>";	
            echo "</tr>";
			$i++;
		}
	?>
</table>
 </body>
 <footer>
    <nav>
        <ul>
            <li><a href="index_Shaikh.html">Home</a></li>
            <li><a href="customerview_Shaikh.php">View: Customer Info</a></li>
				<li><a href="customeradd_Shaikh.php">Add: Customer Info</a></li>
				
                <li><a href="softwareadd_Shaikh.php">Add: Software Info</a></li>
                <li><a href="softdescripview_Shaikh.php">View: Software Description</a></li>
                <li><a href="softdescripadd_Shaikh.php">Add: Software Description</a></li>
                <li><a href="all_id_view_Shaikh.php">View: All Id's</a></li>
                <li><a href="all_id_add_Shaikh.php">Add: All Id's</a></li>
        </ul>
    </nav>
</footer>
</html>