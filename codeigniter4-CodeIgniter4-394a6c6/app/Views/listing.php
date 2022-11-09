<!DOCTYPE html> 
 <html lang="en"> 
 <head> 
   <title>Listing</title> 
   <meta charset="utf-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
 </head> 
 <body> 
   
 <div class="container"> 
   <h2>Listing Data</h2> 
 <p><a href="<?php echo base_url('add');?>" class="btn btn-primary">Add</a></p> 
   <table class="table table-bordered"> 
     <thead> 
       <tr> 
         <th>Name</th> 
         <th>Email</th> 
         <th>Mobile</th> 
                           <th>Edit</th> 
                             <th>Delete</th> 
       </tr> 
     </thead> 
     <tbody> 
             
             <?php foreach($LISTDATA as $data) 
             {?> 
       <tr> 
         <td><?php echo $data->name;?></td> 
         <td><?php echo $data->email;?></td> 
         <td><?php echo $data->mobile;?></td> 
                         <td><a href="<?php echo base_url('edit/'.$data->id);?>">Edit</a></td> 
                         <td><a href="<?php echo base_url('delete/'.$data->id);?>">Delete</a></td> 
       </tr> 
             <?php } ?> 
     </tbody> 
   </table> 
 </div> 
   
 </body> 
 </html> 
   