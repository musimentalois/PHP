<?php

require '../../connection/classes/crediatial.php';
// $credentials = new credetial\Credetials;

$connect = mysqli_connect($credentials->DB_HOST, $credentials->DB_USER, $credentials->DB_PASSWORD, $credentials->DB_NAME);

if (!$connect) {
    echo "<h1>Connection Failed</h1>";
} else {

    class Info
    {
        public $firtname;
        public $lastname;
        public $telephone;
        public $gender;
        public $nationality;
        public $username;
        public $email;
        public $password;

        
    }
     
    $info = new Info();

     $info->firstname= $_POST['firstname'];
     $info->lastname= $_POST['lastname'];
     $info->telephone= $_POST['telephone'];
     $info->gender= $_POST['gender'];
     $info->nationality= $_POST['nationality'];
     $info->username= $_POST['username'];
     $info->email= $_POST['email'];
     $info->password= $_POST['password'];

    $query = "INSERT INTO users(firstName , lastName , telephone , gender , nationality , username , email , password) VALUES('$info->firstname' , '$info->lastname' , '$info->telephone' , '$info->gender' , '$info->nationality' , '$info->username' , '$info->email' , '$info->password')";
    $insert = mysqli_query($connect, $query);
    if ($insert) {
        echo "<h1>Insertion Successeded</h1>";
    } else {
        die(mysqli_error($connect));
        echo "<h1>Insertion Failed</h1>";
    }
}

?>