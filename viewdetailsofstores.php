<?php
	$con = mysqli_connect("localhost", "user", "pass", "dbname");
	$name = $_POST["nameofstore"];
	$sql = "SELECT * from stores where name = '".$name."'";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc()) {
        echo $row["name"]." ".$row["location"];
    }

?>