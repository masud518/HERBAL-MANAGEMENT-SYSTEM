<?php 
include('config.php');
error_reporting(0);
$user = $_POST['user'];
$pass = $_POST['pass'];
$query ="SELECT * FROM login WHERE username = '$user' and password = '$pass'";  
$result =mysqli_query($conn,$query);
if(mysqli_num_rows($result)) {
    //session_start();
    header('location:agency.php');
}else{
    echo" ";

}
?>
<html>  
<head>  
    <title>PHP login system</title>    
    <link rel = "stylesheet" type = "text/css" href = "./css/style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "#"  method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" required/>  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" required/>  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
              
        </form>  
    </div>    
    
</body>     
</html>  