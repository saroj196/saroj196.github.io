<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server, $username, $password);
if (!$con){
    die("connection to the data base is failed".mysqli_connect_error());

}
//echo " sucessfully connected";

$name = $_POST['name'];
$pass = $_POST['pass'];
$sql =" INSERT INTO `test1`.`user` ( `name`, `password`, `dt`) VALUES ( '$name', '$pass', current_timestamp())";
if($con->query($sql)==true){
    echo "sucessfully added";

}
else{
    echo"error:$sql<br> $Con->error";

}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel</title>
</head>
<body>
    <div class="container">
        <h3>welcome</h3>
    </div>
    <form action="new.php" method="POST">
    <input type="text"name="name" id="name">
    <input type="pass" name="pass"id="pass">
    <input type="submit" name="submit">
    </form>
</body>
</html>