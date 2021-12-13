<!DOCTYPE html>
<html lang="eng">
 <head>
  <title>Projects</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css">
  <?php
$enter = TRUE; 
if (isset($_POST['softwareid'])) {$softwareid = $_POST['softwareid'];} else {$enter = FALSE;}
if (isset($_POST['software_version'])) {$software_version = $_POST['software_version'];} else {$enter = FALSE;}
if (isset($_POST['operating_system'])) {$operating_system = $_POST['operating_system'];} else {$enter = FALSE;}


$username = 'root';
$password = '';
$server = 'localhost';
$database = 'project_2';
$br = "<br/>";	
$conn = new mysqli($server, $username, $password, $database); 

if ($enter) {
    $query = "INSERT INTO software_info(softwareid, software_version, operating_system)";
    $query .= "VALUES('".$softwareid."','".$software_version."','".$operating_system."')";
    $conn->query($query);
}
    
$query = "SELECT * FROM software_info";
$rs = $conn->query($query);
$num = $rs->num_rows;
$conn->close();	
?>
</head>
<body>
	<table>
		<tr>
			<th>Software id</th>
			<th>Software version</th>
			<th>Operating system</th>	
            		
		</tr>
	<?php
		$i=0;
		while ($i< $num) {
			$rs->data_seek($i);
			$row = $rs->fetch_assoc();
			echo "<tr>";
			echo "<td>".$row["softwareid"]."</td>";
			echo "<td>".$row["software_version"]."</td>";
			echo "<td>".$row["operating_system"]."</td>";	
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