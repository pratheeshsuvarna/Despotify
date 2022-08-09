<?php  
//  include 'db.php';  
//  $output = array();  
//  $query = "SELECT * FROM list_song";  
//  $result = mysqli_query($connect, $query);  
//  while ($row = mysqli_fetch_array($result)) {
//     $output[] = array("Sid"=>$row['Sid'],"sname"=>$row['sname'],"dor"=>$row['dor'],"artwork"=>$row['artwork'],"artists"=>$row['artists']);
//    }
//  echo json_encode($output);

 include 'db.php';  
 $output = array();  
 $query = "SELECT Sid FROM list_song";
 $result = mysqli_query($connect, $query);  
 while ($row = mysqli_fetch_array($result)) {
    $output[] = (int)$row['Sid'];
   }
 $output2 = array();
 foreach($output as $value){
  $query2 = "SELECT list_song.Sid,list_song.sname,list_song.dor,list_song.artwork,list_song.artists,asrating.Ratings
  FROM list_song
  INNER JOIN asrating WHERE list_song.Sid=$value AND asrating.Sid=$value LIMIT 1;";
  $result2 = mysqli_query($connect, $query2);
  while ($row = mysqli_fetch_array($result2)) {
    $output2[] = array("Sid"=>$row['Sid'],"sname"=>$row['sname'],"dor"=>$row['dor'],"artwork"=>$row['artwork'],"artists"=>$row['artists'],"Ratings"=>(int)$row['Ratings']);
   }
 }
 echo json_encode($output2);
 ?>  
