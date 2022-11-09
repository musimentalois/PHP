<?php
/*include model.php here*/
include 'model.php';


$obj = new Model();

if(isset($_POST['submit'])){
  $obj->insertRecord($_POST);
}// if isset close
/* fetch record fro updating*/
if(isset($_POST['update'])){
    $obj->updateRecord($_POST);
  }

  /* delete records */
  if(isset($_GET['deleteid'])){
    $delid = $_GET['deleteid'];
    $obj->deleteRecord($delid);
  }
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Crud operation in PHP oops</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body><br>
        <h2 class="text-center text-info">Crud operation in php using oops</h2><br>
        <div class="container">
            <!-- success message --> 
            <?php
            if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
                echo '<div class="alert alert-primary" role="alert">
            Record inserted successfully
              </div>';
            }
            if(isset($_GET['msg']) AND $_GET['msg']=='ups'){
                echo '<div class="alert alert-primary" role="alert">
            Record updated successfully
              </div>';
            }
            if(isset($_GET['msg']) AND $_GET['msg']=='del'){
                echo '<div class="alert alert-primary" role="alert">
            Record Deleted successfully
              </div>';
            }
            ?>
            <?php
            if(isset($_GET['editid'])){
    $editid = $_GET['editid'];
    $myrecord = $obj->displayRecordById($editid);
    
?>
     <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo $myrecord['name'];?>" placeholder="Enter your Name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $myrecord['email'];?>" placeholder="Enter your Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="hid" value="<?php echo $myrecord['id'];?>"> 
                    <input type="submit" name="update" value="update"  class="btn btn-info">
                </div>
            </form>
<?php
}else{
    ?>
    <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter your Name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="submit"  class="btn btn-info">
                </div>
            </form>
            <?php } //else close?>
        <br>

<br>
            <h4 class="text-center text-danger">Display Records</h4>
            <table class="table table-bordered">
                <tr class="bg-primary text-center">
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                </tr>
                <?php
                //Display Records

                $data = $obj->displayRecord();
                foreach($data as $value){
                    ?>
                    <tr class="text-center">
                        <td><?php echo $sno++; ?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['email'];?></td>
                         <td>
                            <a href="index.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                            <a href="index.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>

                         </td>
                    </tr>
                    <?php
                }//foreach close
                ?>
            </table>
        </div>
    </body> 
</html>