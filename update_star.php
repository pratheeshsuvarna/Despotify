<?php
    include 'db.php';
    $info=json_decode(file_get_contents("php://input"));
    $Ratings = mysqli_real_escape_string($connect,$info->Ratings);
    $Sid = mysqli_real_escape_string($connect,$info->Sid);
    $nsid = (int)$Ratings;
    $query = "UPDATE asrating SET Ratings=$nsid WHERE Sid= $Sid";
    mysqli_query($connect, $query);
    // $query="INSERT INTO artists(Artist_name,DOB,Bio) VALUES('$Artist_name','$DOB','$Bio')";

    // if(mysqli_query($connect,$query))
    // {
    //     echo"Data inserted";
    // }
    // else
    // {
    //     echo'Error';
    // }
?>