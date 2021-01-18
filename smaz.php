<?php

	$db = mysqli_connect("localhost", "root", "", "todolist");

		if (empty($_GET['ID'])) {                  
            
            header('location: index.php');           
		}
        else{
			$smaz = $_GET['ID'];                  
            
			mysqli_query($db, "DELETE FROM todo WHERE id=".$smaz); 
            header('location: index.php');             
		} 
		
?>