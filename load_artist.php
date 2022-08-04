<?php  
 //load_country.php  
 $connect = mysqli_connect("localhost", "root", "", "Despotify");  
 $output = array();  
 $query = "SELECT Aid,Artist_name FROM artists";  
 $result = mysqli_query($connect, $query);  
//  while($row = mysqli_fetch_array($result))  
//  {  
//       $output[] = $row;  
//  }  
 while ($row = mysqli_fetch_array($result)) {
    // $output[] = array("fname"=>$row['fname'],"lname"=>$row['lname'],"username"=>$row['username']);
    $output[] = array("Aid"=>$row['Aid'],"Artist_name"=>$row['Artist_name']);
   }
 echo json_encode($output);  
 ?>  