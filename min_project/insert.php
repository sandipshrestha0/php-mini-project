<?php
// $sn=$name=$address=$phone=$email=$gender=$events=$cost="";
if(isset($_POST["btnsave"]))
{
    $sn=$_POST["txtsn"];
    $name=$_POST["txtname"];
    $address=$_POST["txtaddress"];
    $phone=$_POST["txtphone"];
    $email=$_POST["txtemail"];
    $gender=$_POST["txtgender"];
    $events=$_POST["txtevents"];
    $cost=$_POST["txtcost"];

    include'conn.php';
$query="insert into events(Sn,Name,Address,Phone,Email,Gender,Event,Cost)
values('NULL','$name','$address','$phone','$email','$gender','$events','$cost')";
if(mysqli_query($conn,$query))
{
    echo "Record Saved";
}
else{
    echo"Failed to save";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <div class="header">
<?php include 'menu.php'; ?>
    </div>
    <div>
        <h1>
            Enter your Events.
        </h1>
        <div class="form">
            <form action="insert.php" method="post">
            <table>
              <tr>
                  <td>S.n</td>
                  <td><input type="text" name="txtsn" ></td>
              </tr>
              <tr>
                <td>Name </td>
                <td><input type="text" name="txtname" required></td>
              </tr>
              <tr>
                  <td>Address</td>
                  <td><input type="text" name="txtaddress" required ></td>
              </tr>
              <tr>
                  <td>Phone</td>
                  <td><input type="text" name="txtphone" ></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><input type="text" name="txtemail"></td>
              </tr>
              <tr>
                  <td>Gender</td>
                  <td><input type="text" name="txtgender"></td>
              </tr>
              <tr>
                  <td>Events</td>
                  <td><input type="text" name="txtevents"></td>
              </tr>
              <tr>
                  <td>Cost</td>
                  <td><input type="text" name="txtcost" ></td>
              </tr>
              <tr>
                  <td><input type="submit"  value="save" name="btnsave"></td>
              </tr>
          </table>
            </form>
        </div>
    </div>
    
</body>
</html>
<!-- 
    sn
    name
    address
    phone no
    email
    events
    fees
    time


-->