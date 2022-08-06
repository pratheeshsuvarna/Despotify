<?php
    include 'db.php';
    $info=json_decode(file_get_contents("php://input"));
    $Artist_name = mysqli_real_escape_string($connect,$info->artistname);
    $DOB = mysqli_real_escape_string($connect,$info->dob);
    $Bio = mysqli_real_escape_string($connect,$info->bio);

    $query="INSERT INTO artists(Artist_name,DOB,Bio) VALUES('$Artist_name','$DOB','$Bio')";

    if(mysqli_query($connect,$query))
    {
        echo"Data inserted";
    }
    else
    {
        echo'Error';
    }
?>
