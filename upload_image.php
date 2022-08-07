<?php
include 'db.php';
$output = '';  
$query = "SELECT Sid FROM list_song ORDER BY Sid DESC LIMIT 1;";  
$result = mysqli_query($connect, $query);  
while ($row = mysqli_fetch_array($result)) {
   $output = $row['Sid'];
  }
  echo"$output";
//   $id = (int)$output;
  if(!empty($_FILES))  
  {  
       $path = 'Img/' . $_FILES['file']['name'];  
       if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
       {  
            $Query = "UPDATE list_song SET artwork='".$_FILES['file']['name']."' WHERE Sid = $output";  
            if(mysqli_query($connect, $Query))  
            {  
                 
            }  
            else  
            {  
                 
            }  
       }  
  }  
  else  
  {  
       echo 'Some Error';  
  }
?>