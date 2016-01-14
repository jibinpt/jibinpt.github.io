<?php

	$con = mysqli_connect('localhost', 'user', 'pass', 'database');
	$sql = "select name from stores";
	$result = $con->query($sql);
	while($row = $result->fetch_assoc()) {
        echo $row["name"]."\n";
    }

?>