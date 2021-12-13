<!DOCTYPE html>
<html lang="eng">
 <head>
  <title>Projects</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
  <?php
$enter = TRUE; 
if (isset($_POST['customerid'])) {$customerid = $_POST['customerid'];} else {$enter = FALSE;}
if (isset($_POST['Surname'])) {$Surname = $_POST['Surname'];} else {$enter = FALSE;}
if (isset($_POST['Name'])) {$Name = $_POST['Name'];} else {$enter = FALSE;}
if (isset($_POST['Softwarename'])) {$Softwarename = $_POST['Softwarename'];} else {$enter = FALSE;}

$username = 'root';
$password = '';
$server = 'localhost';
$database = 'project_2';
$br = "<br/>";	
$conn = new mysqli($server, $username, $password, $database); 

if ($enter) {
    $query = "INSERT INTO customer_info(customerid, Surname, Name, Softwarename)";
    $query .= "VALUES('".$customerid."','".$Surname."','".$Name."','".$Softwarename."')";
    $conn->query($query);
}
    
$query = "SELECT * FROM customer_info";
$rs = $conn->query($query);
$num = $rs->num_rows;
$conn->close();	
?>
</head>
<body>
	<table>
		<tr>
			<th>Customer id</th>
			<th>Surname</th>
			<th>Name</th>	
            <th>Software name</th>		
		</tr>
	<?php
		$i=0;
		while ($i< $num) {
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			echo "<tr>";
			echo "<td>".$row["customerid"]."</td>";
			echo "<td>".$row["Surname"]."</td>";
			echo "<td>".$row["Name"]."</td>";	
            echo "<td>".$row["Softwarename"]."</td>";	
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
				<li><a href="customeradd_Shaikh.php">Add: Customer Info</a></li>
				<li><a href="softwareview_Shaikh.php">View: Software Info</a></li>
                <li><a href="softwareadd_Shaikh.php">Add: Software Info</a></li>
                <li><a href="softdescripview_Shaikh.php">View: Software Description</a></li>
                <li><a href="softdescripadd_Shaikh.php">Add: Software Description</a></li>
                <li><a href="all_id_view_Shaikh.php">View: All Id's</a></li>
                <li><a href="all_id_add_Shaikh.php">Add: All Id's</a></li>
        </ul>
    </nav>
</footer>
</html>