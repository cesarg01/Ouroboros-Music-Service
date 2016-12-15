<?php
namespace stormwind\hw3\models;

require_once('model.php');
//echo "<link rel='stylesheet'href='https://bootswatch.com/superhero/bootstrap.min.css'>";
class ReadModel extends Model{

	public function readColumnfromTable($table) {

		$arr = [];
		echo "<h1>$table Table</h1>";
		//$sql = mysqli_connect(DB_ADDRESS, DB_USER, DB_PASS, DB_USE);
		$statement = "SHOW COLUMNS FROM $table";
		$result = mysqli_query($this->mysql, $statement) or die(mysql_error());
		echo "<table class='table table-striped table-hover '>";
		echo "<thead>";
		echo "<tr>";

		while($row = mysqli_fetch_assoc($result)){
			$field = $row['Field'];
			echo "<td>$field</td>";
			array_push($arr, $field);
		}
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		$classarr = array(" ","class='info'", "class='success'", "class='danger'", "class='warning'", "class='active'");
		$index = 0;


		$query = "SELECT * FROM $table";
		$link = mysqli_query($this->mysql, $query) or die(mysql_error());

		while ($row = mysqli_fetch_assoc($link)) {

			echo "<tr $classarr[$index]>";
			for ($i = 0 ; $i < count($arr); $i++) {
				echo "<td>" . htmlspecialchars($row[$arr[$i]]) . "</td>";
			}
			echo "</tr>";
			$index++;
			if ($index == 6) {
				$index = 0;
			} 

		}

		echo "</tbody>";
		echo "</table>";

		echo "<a href='index.php' class='btn btn-primary'>Back</a><br>";
		echo "<a href='index.php' class='btn btn-primary disabled'>Back </a>";
		
	}



	public function queryFromTable($query) {

		$classarr = array(" ","class='info'", "class='success'", "class='danger'", "class='warning'", "class='active'");
		$index = 0;

		echo "<strong>Query: </strong>$query";
		$result = mysqli_query($this->mysql, "$query") or die(mysql_error());
		echo "<br>";
		$fieldName = [];
		
		
		if (mysqli_affected_rows($this->mysql) < 0) {

			echo "<br><div class='alert alert-dismissible alert-danger'>";
			echo "<h4>Warning!</h4>";
    		echo "<p>Invalid statement!</p>";
    		echo "</div>";
    	}
    	if (mysqli_affected_rows($this->mysql) == 0) {
    		echo "<br><div class='alert alert-dismissible alert-danger'>";
			echo "<h4>Warning!</h4>";
    		echo "<p> Statement is invalid!</p>";
    		echo "</div>";
    	}  else if  
    		(is_bool($result) ) {
    			echo "<br><div class='alert alert-dismissible alert-success'>";
				echo "<h4>Congratulations!</h4>";
    			echo "<h4> Database is updated!";
    			echo "</div>";
    	}else {
    	
    		
		while($row = mysqli_fetch_assoc($result)){
   		
		foreach($row as $cname => $cvalue){
       	 	if (!isset($fieldName[$cname])) {
       	 		$fieldName[$cname] = 1;
       	 	}
    		}
    	}

    	}

    	if (isset($result->num_rows) && mysqli_affected_rows($this->mysql) == $result->num_rows) {

    	echo "<table class='table table-striped table-hover'>";
    	echo "<thead>";
    	echo "<tr>";
    	foreach($fieldName as $key => $value) {
    		echo "<td>$key</td>";
    	}

    	echo "</tr>";
    	echo "<thead>";
    	echo "<tbody>";
    	$mysqli = $this->mysql;

    	$result2 = mysqli_query($mysqli, "$query") or die(mysql_error());

    	if ($result2 == false || !$result2) {
    		//echo "<h4>Invalid statement!";
    	} else if  
    		(is_bool($result2)) { 
    				//echo "<h4> Database is updated!";
    	}else {
    	while($row = mysqli_fetch_assoc($result2)){
   		echo "<tr $classarr[$index]>";
		foreach($row as $cname => $cvalue){
       	 	echo "<td>$cvalue</td>";
    	}
    	echo "</tr>";
    	$index++;
			if ($index == 6) {
				$index = 0;
			} 

    	}
    }
		echo "<br>";
		
	echo "</table>";
	}
			echo "<a href='index.php' class='btn btn-primary'>Back </a><br>";
			echo "<a href='index.php' class='btn btn-primary disabled'>Back </a>";
		
		
	}

	
	
}

?>