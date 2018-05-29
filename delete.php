<HTML>
	<head></head><body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "burnly";
    $mysql_password = "peptobismo1";
    $mysql_database = "phones";
	
	$item = $_POST["delete"];
	
	$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "Delete FROM phoneinfo WHERE Model='" . $_POST['delete'] . "'";
	$result = $conn->query($sql);
echo $item." has been deleted.";		
echo"<br><form action= 'back.php' method = 'get'>";
echo "<input name = 'back'   type = 'submit' value = 'Go Back'></form>";

         }
else{
    echo ("error");
    }         
?>
</body>
       <br><form action= 'back.php' method = 'get'>
           </style>
        <title>Data</title>
         <link href="colors.css" rel="stylesheet" type="text/css"> 
        </style>