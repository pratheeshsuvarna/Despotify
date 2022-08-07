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
} else {
    echo 'Error';
}
?>
