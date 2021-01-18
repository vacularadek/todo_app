<?php
	$db = mysqli_connect("localhost", "root", "", "todolist");

		if (empty($_GET['ID'])) {                  
            header('location: index.php');           
		}
        else{
			$spln = $_GET['ID'];                  
            
			mysqli_query($db, "UPDATE todo SET splneno = 1 WHERE id=".$spln); 
            header('location: index.php');             
		} 
		
?>