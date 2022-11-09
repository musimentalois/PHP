<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    border-spacing: 0px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    }

table{
    spacing: 0;
}
th, td{
    border: 1px solid black;
    spacing: 0;
}
</style>
<body>
    <!-- <?php
     
     foreach ($students as $student){
        echo $student->firstname;
        echo "<br>";
        echo $student->lastname;
        echo "<br>";
        echo $student->studentId;
     }
    ?> -->

    <table>
        <tr>
            <th>student Id</th>
            <th>First Name</th>
            <th>lastName</th>
            <th>Gender</th>
            
        </tr>
        <?php foreach($students->result() as $student){?>
            <tr>
                <td><?= $student->studentId ?></td>
                <td><?= $student->firstname ?></td>
                <td><?=$student->lastname ?></td>
                <td><?=$student->gender ?></td>
        </tr>

       <?php }?>
    </table>
    
</body>
</html>