<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" value="<?php echo $EDITDATA[0]->name;?>"  placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" value="<?php echo $EDITDATA[0]->email;?>"  placeholder="Enter email" name="email">
    </div>
	
	 <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="text" class="form-control" value="<?php echo $EDITDATA[0]->mobile;?>"  placeholder="Enter mobile" name="mobile">
    </div>
	
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
