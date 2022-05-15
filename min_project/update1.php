<?php
 include'conn.php';
// $sn=$name=$address=$phone=$email=$gender=$events=$cost="";

$upsn=$_GET["updatesn"];
$sql="select*from events where Sn=$upsn";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$sn=$row['Sn'];
$name=$row['Name'];
$address=$row['Address'];
$phone=$row['Phone'];
$email=$row['Email'];
$gender=$row['Gender'];
$events=$row['Event'];
$cost=$row['Cost'];
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

   
$sql="update 'events' set Sn=$sn, Name='$name',Address='$address', Phone='$phone', Email='$email', Gender='$gender', Events='$events', Cost='$cost' where Sn=$sn";
if(mysqli_query($conn,$sql))
{
    echo "Updated sucessfully.";
}
else{
    echo"Failed to update.";
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
            <form action="update1.php" method="post">
            <table>
            <tr>
                <td>sn </td>
                <td><input type="text" name="txtsn" value="<?php echo $sn;?>" required></td>
              </tr>
              <tr>
                <td>Name </td>
                <td><input type="text" name="txtname" value="<?php echo $name;?>" required></td>
              </tr>
              <tr>
                  <td>Address</td>
                  <td><input type="text" name="txtaddress" value="<?php echo $address;?>" required ></td>
              </tr>
              <tr>
                  <td>Phone</td>
                  <td><input type="text" name="txtphone" value="<?php echo $phone;?>" ></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><input type="text" name="txtemail" value="<?php echo $email;?>"></td>
              </tr>
              <tr>
                  <td>Gender</td>
                  <td><input type="text" name="txtgender" value="<?php echo $gender;?>"></td>
              </tr>
              <tr>
                  <td>Events</td>
                  <td><input type="text" name="txtevents" value="<?php echo $events;?>"></td>
              </tr>
              <tr>
                  <td>Cost</td>
                  <td><input type="text" name="txtcost" value="<?php echo $cost ?>" ></td>
              </tr>
              <tr>
                  <td><input type="submit"  value="Update" name="btnsave"></td>
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