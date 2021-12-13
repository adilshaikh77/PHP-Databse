<!DOCTYPE html>
<html lang="eng">
 <head>
  <title>Projects</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
  <?php
$enter = TRUE; 
if (isset($_POST['main_id'])) {$main_id = $_POST['main_id'];} else {$enter = FALSE;}
if (isset($_POST['customerid'])) {$customerid = $_POST['customerid'];} else {$enter = FALSE;}
if (isset($_POST['softwareid'])) {$softwareid = $_POST['softwareid'];} else {$enter = FALSE;}
if (isset($_POST['descriptionid'])) {$descriptionid = $_POST['descriptionid'];} else {$enter = FALSE;}



$username = 'root';
$password = '';
$server = 'localhost';
$database = 'project_2';
$br = "<br/>";	
$conn = new mysqli($server, $username, $password, $database); 

if ($enter) {
    $query = "INSERT INTO all_id(main_id, customerid, softwareid, descriptionid)";
    $query .= "VALUES('".$main_id."','".$customerid."','".$softwareid."','".$descriptionid."')";
    $conn->query($query);
}
    
$query = "SELECT * FROM all_id";
$rs = $conn->query($query);
$num = $rs->num_rows;
$conn->close();	
?>
</head>
<body>
	<table>
		<tr>
			<th>Main Id</th>
			<th>Customer Id</th>
			<th>Software Id</th>	
            <th>Description Id</th>
            		
		</tr>
	<?php
		$i=0;
		while ($i< $num) {
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			echo "<tr>";
			echo "<td>".$row["main_id"]."</td>";
			echo "<td>".$row["customerid"]."</td>";
			echo "<td>".$row["softwareid"]."</td>";	
            echo "<td>".$row["descriptionid"]."</td>";
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
				<li><a href="softwareview_Shaikh.php">View: Software Info</a></li>
                <li><a href="softwareadd_Shaikh.php">Add: Software Info</a></li>
                <li><a href="softdescripview_Shaikh.php">View: Software Description</a></li>
                <li><a href="softdescripadd_Shaikh.php">Add: Software Description</a></li>
                <li><a href="all_id_add_Shaikh.php">Add: All Id's</a></li>
        </ul>
    </nav>
</footer>
</html>