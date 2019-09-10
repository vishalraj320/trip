<?php
include("connection.php");
$query = "INSERT INTO trips_data VALUES ('$id','$username','$email','$mobile_number','$no_people','$address')";
$data = mysqli_query($conn, $query);
if($data){
    echo "Data inserted successfully";
}
?>