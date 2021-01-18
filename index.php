<?php 
$db = mysqli_connect("localhost", "root", "", "todolist");
if (isset($_GET['err'])){   
    $err=($_GET['err']);
    }
else{
    $err=0;
    }

echo"<!DOCTYPE HTML>
<html>
  <head>
  <meta http-equiv='content-type' content='text/html; charset=utf-8'>
  <title>TODO</title>
  <link rel='stylesheet' type='text/css' href='style.css'>
  </head>
  <body>
        <h1>TODO</h1>
        <form method='post' action='pridat.php'>
            <input type='text' name='ukol'>
	       	<button type='submit' name='pridatpolozku'>Přidat</button>
        </form>";
if ($err==1){   
    echo"<b>Nelze poslat prázdný úkol</b><br />";
}   
// výpis z DB     
echo"<hr /><h2>Úkoly:</h2><table>";
$data= mysqli_query($db,'SELECT * FROM todo');
foreach($data as $d){ 
    echo"<tr><td>" . htmlspecialchars($d['ukol']);
    echo"</td>";
    if($d['splneno']==0){   
        echo"<td><a href='splneno.php?ID=". htmlspecialchars($d['ID']); 
        echo"'>SPLNIT</a>'";
    }
    else{
        echo"<td class='splneno'><b>SPLNĚNO</b>";
    }
    echo"</td>
         <td class='smazat'><a href='smaz.php?ID=". htmlspecialchars($d['ID']); 
    
    echo"'>SMAZAT</a></td></tr>";
}
echo"</table>  
  </body>
</html>";
?>
