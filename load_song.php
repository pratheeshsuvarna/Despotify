<?php  
 include 'db.php';  
 $output = array();  
 $query = "SELECT * FROM list_song";  
 $result = mysqli_query($connect, $query);  
 while ($row = mysqli_fetch_array($result)) {
    $output[] = array("Sid"=>$row['Sid'],"sname"=>$row['sname'],"dor"=>$row['dor'],"artwork"=>$row['artwork'],"artists"=>$row['artists']);
   }
 echo json_encode($output);  
 ?>  