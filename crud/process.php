<?php

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
// connect to database server
include 'db.php';
//write sql statements to insert data
$sql = "insert into studentsinfo(first_name, last_name, city, groupid)
        values ('$fname', '$lname', '$city', '$groupid')";
if ($conn->query($sql)===TRUE){
    echo "Your data was recorded";
}else {
    echo"Error: " .$sql . "<br>" . $conn->error;
}
//close connection
$conn->close();
}

?>