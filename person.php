<html>
<body>
<form action="insert.php" method ="post">
    이름 : <input type="text", name = "user_name">
    나이 : <input type="text", name = "age">
    <input type="submit">
</form>
<table border="1">
    <tr>
        <td>lastname
        </td>
        <td>age
        </td>
    </tr>
</table>
<?php
$db_host = "127.0.0.1";
$db_user = "root";
$db_passwd = "rgpkorea";
$db_name = "test_db";

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

$result = mysqli_query($conn,"SELECT * FROM Persons limit 100");

while($row = mysqli_fetch_array($result)){
    echo $row['LastName'] . "/" . $row['Age'];
    echo "<br>";
}
mysqli_close($conn);
?>

<table border="1">
    <tr>
        <td>2
        </td>
        <td>3
        </td>
    </tr>
</table>
</body>
</html>