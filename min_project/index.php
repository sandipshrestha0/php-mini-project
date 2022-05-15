<?php
session_start();
$uname="";
$pwd="";
if(isset($_POST["btnok"]))
{
    $uname = $_POST["txtv1"];
    $pwd = $_POST["txtv2"];
    if($uname=="admin" && $pwd=="admin")
    {
        $_SESSION["valid"] = true;
        header("location:dashboard.php");
    }
    else{
        echo("user name and password invalid");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="index.php" method="post">
        
           
                <h1>Log In Page</h1>
            </tr>
            <table >
            <tr>
                <td>
                user
                </td>
                <td>
                <input type="text" name="txtv1">
                </td>
            </tr>
            <tr>
                <td>
                Password 
                </td>
                <td>
                <input type="password" name="txtv2"> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="Login" name="btnok"> <br>
                </td>
            </tr>
        </table>
   
        
        
        
    </form>
</body>
</html>