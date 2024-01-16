<?php
include 'dbconnect.php';
$id=$_GET['updateid'];
$SELECT="SELECT * FROM `STUDENT_DATABASE` WHERE S_no=$id";
$fetch=mysqli_query($con,$SELECT);
$row=mysqli_fetch_assoc($fetch);
$name=$row['NAME'];
$FNAME=$row['FATHERS NAME'];
$MNAME=$row['MOTHERS NAME'];
$CONTACT=$row['CONTACT']; 
$ADDRESS=$row['ADDRESS'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    
$NAME=$_POST['name'];
$FNAME=$_POST['fname'];
$MNAME=$_POST['mname'];
$CONTACT=$_POST['contact'];
$ADDRESS=$_POST['address'];




$UPDATE="UPDATE  `STUDENT_DATABASE`  SET `S_no`='$id',`NAME`='$NAME',`FATHERS NAME`='$FNAME',
`MOTHERS NAME`='$MNAME',`CONTACT`='$CONTACT',`ADDRESS`='$ADDRESS' WHERE S_no=$id";
$query=mysqli_query($con,$UPDATE);
    if($query)
    {
        header('location:display.php');
        
    }
    else
    {
        echo "Database error".mysqli_error($con);
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>UPDATE YOUR DATA</h1>
<div class="container my-5">
<form method="POST">
<div class="mb-3">
    <label >S NO</label>
    <input type="text" class="form-control" name="name" id="Name"  Disabled value="<?PHP echo$id?>" >
  </div>
  <div class="mb-3">
    <label >NAME</label>
    <input type="text" class="form-control" name="name" id="Name" value="<?PHP echo$name?>" >
  </div>
  <div class="mb-3">
    <label >FATHERS NAME</label>
    <input type="text" class="form-control" name="fname" id="FName" value="<?PHP echo$FNAME?>">
  </div>
  <div class="mb-3">
    <label >MOTHERS NAME</label>
    <input type="text" class="form-control" name="mname" id="MName" value="<?PHP echo$MNAME?>" >
  </div>
  <div class="mb-3">
    <label >CONTACT</label>
    <input type="text" class="form-control"  name="contact" id="CONTACT" value="<?PHP echo$CONTACT?>">
  </div>
  <div class="mb-3">
    <label >ADDRESS</label>
    <input type="text" class="form-control" name="address" id="ADDRESS" value="<?PHP echo$ADDRESS?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
          







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>