<?php  
 include 'db.php';  
 $output = array();  
 $query = "SELECT artists.Aid,artists.Artist_name,artists.DOB,artists.Bio,artists.songs,SUM(asrating.Ratings)
 FROM artists
 INNER JOIN asrating ON artists.Aid=asrating.Aid GROUP BY asrating.Aid;";  
 $result = mysqli_query($connect, $query);  
 while ($row = mysqli_fetch_array($result)) {
    $output[] = array("Aid"=>$row['Aid'],"Artist_name"=>$row['Artist_name'],"DOB"=>$row['DOB'],"Bio"=>$row['Bio'],"songs"=>$row['songs'],"Ratings"=>(int)$row['SUM(asrating.Ratings)']);
   }
 echo json_encode($output);  
 ?>  