<?php
include 'db.php';
$info = json_decode(file_get_contents("php://input"));
$songname = mysqli_real_escape_string($connect, $info->songname);
$dor = mysqli_real_escape_string($connect, $info->dor);
$artists = mysqli_real_escape_string($connect, $info->artname);
$artid = $info->artid;
$query = "INSERT INTO list_song(sname,dor,artists) VALUES('$songname','$dor','$artists')";
if (mysqli_query($connect, $query)) {
    echo "Data inserted";
    $output = '';
    $query = "SELECT Sid FROM list_song ORDER BY Sid DESC LIMIT 1;";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_array($result)) {
        $output = $row['Sid'];
    }
    $sid = (int)$output;
    foreach ($artid as $value) {
        $query2 = "SELECT songs FROM artists WHERE Aid= $value;";
        $result2 = mysqli_query($connect, $query2);
        while ($row2 = mysqli_fetch_array($result2)) {
            $output2 = $row2['songs'];
        }
        if($output2==""){
            $query3="UPDATE artists SET songs='$songname' WHERE  Aid= $value";
            mysqli_query($connect, $query3);
        }
        else{
            $query3="UPDATE artists SET songs=CONCAT(songs,',$songname') WHERE  Aid= $value";
            mysqli_query($connect, $query3);
        }
        $rating=1;
        $aid=(int)$value;
        $query4 = "INSERT INTO asrating(Sid,Aid,Ratings) VALUES('$sid','$aid','$rating')";
        mysqli_query($connect, $query4);
    }   
} else {
    echo 'Error';
}
?>
