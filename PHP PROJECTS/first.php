<?php
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

$NAME=$_POST['name'];
$FNAME=$_POST['fname'];
$MNAME=$_POST['mname'];
$CONTACT=$_POST['contact'];
$ADDRESS=$_POST['address'];

$INSERT="INSERT INTO `STUDENT_DATABASE` (`NAME`,`FATHERS NAME`, `MOTHERS NAME`, `CONTACT`, `ADDRESS`)
                    VALUES('$NAME','$FNAME','$MNAME','$CONTACT','$ADDRESS')";
$query=mysqli_query($con,$INSERT);
    if($query)
    {
        header('location:display.php');
        
      
  }
    else
    {
        // die(MySQLi_connect_error());
        echo"data not Inserted<br>".mysqli_error($con);
    }
}

?>


<!doctype html>
<html lang="en">
  <head>5
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PROJECTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>STUDENT APPLICATIONS FORM</h1>
<div class="container my-5"> 

<form method="POST">
  <div class="mb-3">
    <label >NAME</label>
    <input type="text" class="form-control" name="name" id="Name" >
  </div>
  <div class="mb-3">
    <label >FATHERS NAME</label>
    <input type="text" class="form-control" name="fname" id="FName" >
  </div>
  <div class="mb-3">
    <label >MOTHERS NAME</label>
    <input type="text" class="form-control" name="mname" id="MName" >
  </div>
  <div class="mb-3">
    <label >CONTACT</label>
    <input type="text" class="form-control"  name="contact" id="CONTACT" >
  </div>
  <div class="mb-3">
    <label >ADDRESS</label>
    <input type="text" class="form-control" name="address" id="ADDRESS">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
          







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>