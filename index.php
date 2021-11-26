<?php
if(isset($_POST['name'])){
$server="remotemysql.com";
$username="d2IYXlAAN3";
$password="DbAx1olmM5";
$database = "d2IYXlAAN3";
$con = mysqli_connect($server, $username, $password,$database);
if (!$con){
    die("connection to the data base is failed".mysqli_connect_error());

}
//echo " sucessfully connected";

$name = $_POST['name'];
$pass = $_POST['pass'];
$sql =" INSERT INTO `d2IYXlAAN3`.`user` (`id`, `name`, `password`, `dt`) VALUES ('1', '$name', '$pass', CURRENT_TIMESTAMP)";
if($con->query($sql)==true){
   // echo "sucessfully added";

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
    <title>form validation</title>
    <style>
        body{
            background-color: aquamarine;
            display: flex;
            justify-content: center;
            align-items: center;
            height:100vh ;

        }
        #form-container{
            background-color: blanchedalmond;
    
            padding: 50px;
            text-align: center;
            border-radius: 10%;
        }
        h2{
            margin: 0px 0px 10px 0px;
        }
        input{
            width:200px ;
            margin:10px 0px ;
            padding: 10px;
        }
        input[type="submit"]{
            background-color: brown;
            border: 0px;
            color: white;
            border-radius: 5%;
        }
        .error{
            color: red;
            margin: 0px;
            text-align:left;
        }
    </style>
</head>
<body>
    <div id="form-container">
        <h2>login</h2>
        <form action="index.php" method="POST" onsubmit="return validateform()">
        <input type="text"placeholder="user name" id="username" name= "name"><br>
        <p id ="usererror" class="error"></p>
        <input type="password"placeholder="password"id="password" name="pass"><br>
        <p id ="passerror" class="error"></p>
        <input type="submit">
        </form>
    </div>
    <script>
        let i;
        //alert("This is only for fun purpose");
        let username =document.getElementById("username");
        let password =document.getElementById("password");
        let flag=1;
        function validateform(){
           if(username.value=="") {
               
               document.getElementById("usererror").innerHTML="user name is empty";
              flag=0;
           }
           else if(username.value.length<3){
            document.getElementById("usererror").innerHTML="user name required minimum 3 character";
            flag=0;
           }
           else{
            document.getElementById("usererror").innerHTML=""; 
            flag=1; 
           }
           if(password.value==""){
            document.getElementById("passerror").innerHTML="password is empty";
            flag=0;

           }
           else{
            document.getElementById("passerror").innerHTML=""
            flag=1;

           }
           if(flag){
               return true;
           }
           else{
               return false;
           }
        } display(i);
        function display( character){
            for (i=0;i>username.length;i++)
              console.log(i);
        }
    </script>
</body>
</html>
