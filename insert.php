<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_passwd = "rgpkorea";
$db_name = "test_db";


$user_name = $_POST['user_name'];
$age = $_POST['age'];
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if(mysqli_connect_errno()){
    echo 'fail';
}

mysqli_query($conn,"INSERT INTO Persons (Lastname, Age) VALUES ('$user_name','$age')");
mysqli_close($conn);

echo ("<meta http-equiv='Refresh' content='1; URL=person.php'>");