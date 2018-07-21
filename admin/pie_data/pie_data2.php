    <?php
        //address of the server where db is installed
        $servername = "localhost";
        //username to connect to the db
        //the default value is root
        $username = "root";
        //password to connect to the db
        //this is the value you would have specified during installation of WAMP stack
        $password = "";
        //name of the db under which the table is creat
        $dbName = "vcare";
        //establishing the connection to the db.
        $conn = new mysqli($servername, $username, $password, $dbName);
        //checking if there were any error during the last connection attempt
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        //the SQL query to be executed
		$variable="gender";
        $query = "SELECT DISTINCT ".$variable." FROM `patient`";
        //storing the result of the executed query
		//initialize the array to store the processed data
		$jsonArray = array();
        $result = $conn->query($query);
		if ($result->num_rows>0){
			while ($row = $result->fetch_assoc()){
			$query1="SELECT count(*) FROM `patient` where ".$variable."='".$row[$variable]."'";
			//echo $query1;
			//echo "\n".$variable;
					
			$result1=$conn->query($query1) or die($conn->error);
			$row1=$result1->fetch_assoc();
			$jsonArrayItem = array();
			$jsonArrayItem['label'] = $row[$variable];
			$jsonArrayItem['value'] = $row1['count(*)'];
			array_push($jsonArray, $jsonArrayItem);
			}
		}
        //Closing the connection to DB
        $conn->close();
        //set the response content type as JSON
        header('Content-type: application/json');
        //output the return value of json encode using the echo function. 
        echo json_encode($jsonArray);
    ?>    