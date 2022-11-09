<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Login.css">
</head>

<body>
    <div class="main">
        <div class="main1">
            <img class="image" src="invetory.png" alt="Failed to open">
        </div>
        <div class="main2">

            <div class="intro">
                <div class="logo">
                    <h3>Stock Invetory </h3>
                </div>
                <div class="logodesc">
                    <h4>Welcome Back to your Stock Please Enter the needed information inorder to register an invetory</h4>
                </div>
            </div>

            <form action="">



                <div class="forms">
                    <label for="">Quantity</label>
                    <input type="text" name="" id="" placeholder="Enter The Quantity">
                    <label for="">Product Id</label>
                    <select name="product_id" id="">
                        <?php
                        require '../../connection/connection.php';
                        $credentials = new credetial\Credetials;

                        $connect = mysqli_connect($credentials->DB_HOST, $credentials->DB_USER, $credentials->DB_PASSWORD, $credentials->DB_NAME);

                        if (!$connect) {
                            echo "<h1>Connection Failed</h1>";
                        } else {
                            $query = "SELECT * FROM products";
                            $fetch = mysqli_query($connect, $query);
                            if (!$fetch) {
                                echo "it failed";
                            } else {
                                while($row = mysqli_fetch_assoc($fetch)) {
                        ?>

                                    <option value="<?php echo $row['productId'] ?>"><?php echo  $row['productId'] ?></option>
                        <?php }
                            }
                        } ?>
                    </select>
                    
                    <button type="submit">Register Invetory</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>