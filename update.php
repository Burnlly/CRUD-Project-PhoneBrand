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
	
	$item = $_POST["update"];
    
	
	$conn = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	
        $sql = "SELECT * FROM phoneinfo WHERE model='" . $_POST['update'] . "'";
        $result = $conn->query($sql);
	
	    $model = $row[0];
        $storage= $row[1];
        $brand = $row[2];

                        // HTML to display the form on this page.
                     echo "<form action='changeitem.php' method = 'post'>";
                     echo "<TD><input type='text' placeholder='model' name='model' storage='advancedSearchTextBox'></TD>";
                     
                    echo "<TD><select id='select' name='storage'>";
                        echo "<option value='8GB' >8GB</option>";
                        echo "<option value='16GB' >16GB</option>";
                        echo "<option value='32GB' >32GB</option>";
                        echo "<option value='64GB' >64GB</option>";
                        echo "<option value='128GB' >128GB</option>";
                        echo "<option value='256GB' >256GB</option>";
                     echo  "<input type='text' placeholder='brand' name='brand'>";
                        echo "<input name = 'create' type = 'submit' value = 'Submit Changes'>";
                        echo "</form>";
                          
	                    
                    } 
                 echo "</body>"; 
	
?>
<body background="https://collegeinfogeek.com/wp-content/uploads/2011/11/3.jpg"> 
       <br><form action= 'Goback.php' method = 'get'>
           </style>
        <title>Data</title>
         <link href="colors.css" rel="stylesheet" type="text/css"> 
        </style>