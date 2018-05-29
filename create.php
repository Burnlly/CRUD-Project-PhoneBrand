<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "burnly";
    $mysql_password = "peptobismo1";
    $mysql_database = "phones";
	
	//delcare PHP variables
	
	$Brand = $_POST["Brand"];
	$Model = $_POST["Model"];
	$Storage = $_POST["Storage"];
	
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
	
		$statement = $mysqli->prepare("INSERT INTO phoneinfo (Brand, Storage, Model) VALUES(?, ?, ?)"); //prepare sql insert query
		//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
		$statement->bind_param('sss', $Brand, $Storage, $Model); //bind value
		if($statement->execute())
			{
				//print output text
					echo nl2br("Hello, you are using the  "." ". $Brand . "!  " .$Model.  "\r\n with  ". $Storage. ". Your information has been saved!"  , false);
			}
			else{
					print $mysqli->error; //show mysql error if any 
				}

echo"<br><form action= 'back.php' method = 'get'>";
echo "<input name = 'back'   type = 'submit' value = 'Go Back'></form>";
         }
else{
    echo ("error");
    }         
?>
<body background="https://collegeinfogeek.com/wp-content/uploads/2011/11/3.jpg"> 
       <br><form action= 'Goback.php' method = 'get'>
           </style>
        <title>Data</title>
         <link href="colors.css" rel="stylesheet" type="text/css"> 
        </style>