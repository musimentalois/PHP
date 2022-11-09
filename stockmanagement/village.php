<?php

define("HOST","localhost");
$DB_host="localhost";
$DB_user_name="loic";
$DB_password="";
$DB_name ="rwanda";
$connection=mysqli_connect(HOST,$DB_user_name,$DB_password,$DB_name);
require("fpdf.php");

$sql = "SELECT p.provinceName, d.districtName, s.sectorName, c.cellId, c.cellName, v.villageName, v.villageId FROM provinces p INNER JOIN districts d ON p.provinceId = d.provinceId INNER JOIN sectors s ON s.districtId = d.districtId INNER JOIN cells c ON s.sectorId = c.sectorId INNER JOIN villages v ON v.cellId = c.cellId GROUP BY v.villageId";
$data = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <form action="vill_pdf.php" method="POST">
                        <button type="submit" name="btn_pdf" class="btn btn-success">PDF FILE</button>
                    </form>
                </div>
                <div>
                    <table class="table table-striped" border="1" style="width: 100%;">
                        <tr>
                            <th> VillageId </th>
                            <th> Province </th>
                            <th> District </th>
                            <th> Sector </th>
                            <th> CellID </th>
                            <th> Village </th>
                        </tr>
                        <?php
                            while($row = mysqli_fetch_assoc($data)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['villageId'];?></td>
                                    <td><?php echo $row['provinceName'];?></td>
                                    <td><?php echo $row['districtName'];?></td>
                                    <td><?php echo $row['sectorName'];?></td>
                                    <td><?php echo $row['cellId'];?></td>
                                    <td><?php echo $row['villageName'];?></td>

                                </tr>
                                <?php
                                }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>