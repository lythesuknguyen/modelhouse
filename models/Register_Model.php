<?php
require("models/DBManager.php");

class Register_Model extends DBManager {

	// public function insertData($data){
	// 	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB) or die("Failed");

	// 	if (mysqli_connect_errno())
 //  		{
 // 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 // 			 return;
 // 		} 
	// 	$sql = "INSERT INTO `customer` (`ID`, `modelType`, `date`, `time`, `name`, `mail`, `phoneNumber`, `note`) VALUES (null, '".$data['modelType']. "', '".$data['date']. "', '".$data['time']. "','".$data['name']. "', '".$data['mail']. "', '".$data['phoneNumber']. "', '".$data['note']. "');";
	// 	$conn->query($sql);
	// 	//echo $sql;
		
	// }

	function __construct() {
		$this->database();
	}
	public function insertModelHouse($data){
		$sql = "INSERT INTO modelhouse (modelhouse,datechose,time,name,email,phoneNumber,note) values (?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array(($data['modelType'] == "modelhouse1")?1:2,$data['date'],$data['time'],$data['name'],$data['mail'],$data['phoneNumber'],$data['note']));
		if ($result) {
			return TRUE;
		}else{
			return FALSE;
		}

	}

}

?>