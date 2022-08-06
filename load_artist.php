<?php  
 include 'db.php';  
 $output = array();  
 $query = "SELECT Aid,Artist_name FROM artists";  
 $result = mysqli_query($connect, $query);  
 while ($row = mysqli_fetch_array($result)) {
    $output[] = array("Aid"=>$row['Aid'],"Artist_name"=>$row['Artist_name']);
   }
 echo json_encode($output);  
 ?>  