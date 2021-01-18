<?php

	$db = mysqli_connect("localhost", "root", "", "todolist");

	if (isset($_POST['pridatpolozku'])) {              
		if (empty($_POST['ukol'])) {                  
            
            header('location: index.php?err=1');           
		}
        else{
			$ukol = $_POST['ukol'];                  
            
			mysqli_query($db, "INSERT INTO todo (ukol, splneno) VALUES ('$ukol','0')"); 
            header('location: index.php');             
		}}
    else{            
        header('location: index.php?err=1');             
     }   
		
?>