<?php

require '../../connection/classes/crediatial.php';
$credentials = new credetial\Credetials;

$connect = mysqli_connect($credentials->DB_HOST, $credentials->DB_USER, $credentials->DB_PASSWORD, $credentials->DB_NAME);

if (!$connect) {
    echo "<h1>Connection Failed</h1>";
} else {

    class Info
    {
        public $prodname;
        public $brand;
        public $supplier_phone;
        public $supplier;

        
    }
     
    $info = new Info();

     $info->prodname= $_POST['prodname'];
     $info->brand= $_POST['brand'];
     $info->supplier_phone= $_POST['sphone'];
     $info->supplier= $_POST['supplier'];

    $query = "INSERT INTO products(product_Name , brand , supplier_phone , supplier) VALUES('$info->prodname' , '$info->brand' , '$info->supplier_phone' , '$info->supplier')";
    $insert = mysqli_query($connect, $query);
    if ($insert) {
        echo "<h1>Insertion Successeded</h1>";
    } else {
        die(mysqli_error($connect));
        echo "<h1>Insertion Failed</h1>";
    }
}

?>