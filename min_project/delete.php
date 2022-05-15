
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete data </title>
</head>
<body>
    <div>
        <?php include 'menu.php'; ?>
    </div>
    <form action="delete.php" method="post">
        <table>
            <tr>
                <th>
                    SN:
                </th>
                <th>
                    <input type="text" name="sn">
                </th>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnDel" value="Delete">
                </td>
            </tr>
        </table>
        
    </form>
</body>
</html>
<?php 
if(isset($_POST["btnDel"]))
{
$sn=$_POST["sn"];
include "conn.php";
$sql="delete from events where sn=$sn";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "Data has been deleted.";
}
else{
    echo"Try again.";
}
}

?>