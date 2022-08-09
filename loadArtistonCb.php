<?php  
 include 'db.php';  
 $output = array();  
 $query = "SELECT * FROM artists";  
 $result = mysqli_query($connect, $query);  
 while ($row = mysqli_fetch_array($result)) {
    $output[] = array("Aid"=>$row['Aid'],"Artist_name"=>$row['Artist_name'],"DOB"=>$row['DOB'],"Bio"=>$row['Bio'],"songs"=>$row['songs']);
   }
 echo json_encode($output);  
 ?>  