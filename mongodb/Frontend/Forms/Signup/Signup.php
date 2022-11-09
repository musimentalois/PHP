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
                        <h3>Welcome </h3>
                </div>
                
            </div>

       <form action="../../../PHP/Signup/signup.php" method="post">
        <div class="forms">
            <div class="all">
             <div class="first">
                 <label for="">First Name</label>
             <input type="text" name="firstname" id="" placeholder="Enter Your First Name">
             <label for="">Last Name</label>
             <input type="text" name="lastname" id="" placeholder="Enter Your Last Name">

             <label for="">Gender</label>
             <div class="gender">
             <div class="male">
                 <input type="radio" name="gender" id=""> 
             <span>Male</span>
             </div>
             <div class="female">
                 <input type="radio" name="gender" id=""> 
             <span>Female</span>
             </div>
             </div>

             <label for="">Telphone</label>
             <input type="text" name="telephone" id="" placeholder="Enter Your Telphone  ">
             
             </div>

             <div class="rest">
                 <label for="">Nationality</label>
             <select name="nationality" id="">
                 <option value="Rwanda">Rwanda</option>
                 <option value="Uganda">Uganda</option>
                 <option value="Kenya">Kenya</option>
                 <option value="Tanzania">Tanzania</option>
                 <option value="Sudan">Sudan</option>
             </select>
             <label for="">Username</label>
             <input type="text" name="username" id="" placeholder="Enter Your Username">

             <label for="">Email</label>
             <input type="email" name="email" id="" placeholder="Enter Your Email">
             <label for="">Password</label>
             <input type="password" name="password" id="" placeholder="Enter Your Password">
            
             </div>
            </div>
            <div class="desc">
             <input type="checkbox" name="" id="" >
             <p>Remember Me</p>
             <p>Recovery Passsword</p>
         </div>
         <button type="submit">Login</button>
         </div>
       </form>

        </div>
    </div>
</body>
</html>