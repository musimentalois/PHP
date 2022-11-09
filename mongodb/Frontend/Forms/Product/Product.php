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
          <img class="image" src="clip-online-shopping-7.png" alt="Failed to open">
        </div>
        <div class="main2">
            <div class="intro">
                <div class="logo">
                        <h3> Product  Registration</h3>
                </div>
                <!-- <div class="logodesc">
                    <h4>Welcome Back to your Stock Please Enter the needed information inorder to register  your Product</h4>
                </div> -->
            </div>

            <form action="../../../PHP/Products/products.php" method="post">
                <div class="forms">
                    <label for="">Product Name</label>
                    <input type="text" name="prodname" id="" placeholder="Enter The Product Name">
                    <label for="">Brand</label>
                    <input type="text" name="brand" id="" placeholder="Enter The Brand">
                    <label for="">Supplier Phone</label>
                    <input type="text" name="sphone" id="" placeholder="Enter The Supplier Phone">
                    <label for="">Supplier</label>
                    <input type="text" name="supplier" id="" placeholder="Enter The Supplier">
                    <button type="submit">Register Product</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>