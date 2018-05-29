<?php
   $dbhost = 'localhost';
   $dbuser = 'burnly';
   $dbpass = 'peptobismo1';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT Model, Brand, Storage FROM phoneinfo';
   mysql_select_db('phones');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
$Model = $row[0];
$Brand = $row[1];
$Storage= $row[2];

   while($row = mysql_fetch_assoc($retval)) {
     // The following few lines store information from specific cells in the data about an image
			echo "<TR>";
			echo "<TD>Model:".$row['Model']. "_Brand:". $row['Brand']. "_".$row['Storage'] ."Storage</TD>";
			echo "<TD><form action= 'update.php' method = 'post'>";
			echo "<button name = 'update'   type = 'submit' value =".$row['Model'].">Edit</button></FORM>";
			echo "<TD><form action= 'delete.php' method = 'post'>";
			echo "<button name = 'delete'   type = 'submit' value =".$row['Model'].">Delete</button></FORM>";
			echo "</TR>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
   
?>