<HTML>
    <HEAD> <link rel='stylesheet' href='styles.css'></HEAD><BODY>";
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")	//Check it is coming from a form
    {
    $mysql_host = "localhost";
    $mysql_username= "burnly";
    $mysql_password = "peptobismo1";
    $mysql_database = "phones";
    
	    //delcare PHP variables
	    $model= $_POST["model"];
	    $storage = $_POST["storage"];			//The values in the $_POST must match the names given from the HTML document
	    $brand = $_POST["brand"];
	    
        $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        if ($mysqli->connect_error) 
            {
		        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	        }   
        if ($_POST['storage']!= "")
            {
                
	
		$statement = $mysqli->prepare("UPDATE phoneinfo SET model= ?, storage=?, brand=?"); //prepare sql insert query - thank you(https://stackoverflow.com/questions/6514649/php-mysql-bind-param-how-to-prepare-statement-for-update-query)
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('sss', $model, $storage, $brand); //bind value
		if($statement->execute())
			{
				//print output text
				echo nl2br("You have updated "." ". $model. "'s information to" . $storage." ". $brand ."brand.", false);
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}
                
            }
    }
echo"<br><form action= 'update.php' method = 'get'>";
echo "<input name = 'action'   type = 'submit' value = 'Go Back'></form></body>";
?>
<body background="https://collegeinfogeek.com/wp-content/uploads/2011/11/3.jpg"> 
       <br><form action= 'Goback.php' method = 'get'>
           </style>
        <title>Data</title>
         <link href="colors.css" rel="stylesheet" type="text/css"> 
        </style>