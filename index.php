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
