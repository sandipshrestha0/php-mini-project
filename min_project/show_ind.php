<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show individualy</title>
</head>
<body>
   <div>
   <?php include "menu.php"; ?>
   </div> <br>
        <form action="" method="GET">
            <input type="text" name="search" required  placeholder="Search data">
            <button type="submit" class="btn btn-primary">Search</button>     
        </form>
            <table border="1">
                <thead>
                    <tr>
                    <td>S.N</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Event</td>
                    <td>cost</td>
                    </tr>
                </thead>
                <br>
                    <tbody>
                        <?php 
                            $con = mysqli_connect("localhost","root","","sandip");
                            if(isset($_GET['search']))
                                {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM events WHERE CONCAT(Name,Address,Phone,Email,Gender,Event,Cost) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                                {
                                             ?>
                                            <tr>
                                                <td><?= $items['Sn']; ?></td>
                                                <td><?= $items['Name']; ?></td>
                                                <td><?= $items['Address']; ?></td>
                                                <td><?= $items['Phone']; ?></td>
                                                <td><?= $items['Email']; ?></td>
                                                <td><?= $items['Gender']; ?></td>
                                                <td><?= $items['Event']; ?></td>
                                                <td><?= $items['Cost']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                         ?>
                                             <tr>
                                                    <td colspan="4">No Record Found</td>
                                             </tr>
                                        <?php
                                    }
                                 }
                            ?>
                </tbody>
            </table>
                    </div>
                

</body>
</html>