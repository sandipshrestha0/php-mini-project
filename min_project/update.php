<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php' ?>
    <form action="update.php" method="post">
        <table border='1'>
            <tr>
                <th>S.N</th>
		<th>Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Event</th>
		<th>Cost</th>
		<th>Operation</th>
            </tr>
       
       
            <?php
            $sql="select*from events";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
               while( $row=mysqli_fetch_assoc($result)){
                $sn=$row['Sn'];
                $name=$row['Name'];
                $address=$row['Address'];
                $phone=$row['Phone'];
                $email=$row['Email'];
                $gender=$row['Gender'];
                $event=$row['Event'];
                $cost=$row['Cost'];
                echo '<tr>
                    <td>'.$sn.'</td>
                    <td>'.$name.'</td>
                    <td>'.$address.'</td> 
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$event.'</td>
                    <td>'.$cost.'</td>
                    <td> <a href="update1.php?updatesn='.$sn.' ">
                     Update </a> </td> </tr>';
               }
                
            }
            ?> 
        </table>
    </form>
</body>
</html>