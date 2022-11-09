<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>wellcome to dashbord</h1>
    
     <?php
     echo anchor('student/list', 'view all students');
     echo anchor('student/greeting', 'view greetings');
     ?>
</body>
</html>