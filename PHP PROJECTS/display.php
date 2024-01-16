
<?php
    include 'dbconnect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
  </head>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<!-- C:\xampp\htdocs\PHP PROJECTS\IMAGES\LOGO.png -->
  <div class="container-fluid">
 
      <a class="navbar-brand" href="#">
      <img src="/IMAGES/LOGO.png" alt="LOGO" width="40" height="24">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container my-5">
        <button class=" btn btn-primary"> <a href="first.php" class="text-light">Add Student</a> </button>
       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">S NO</th>
      <th scope="col">NAME</th>
      <th scope="col">FATHERS NAME</th>
      <th scope="col">MOTHERS NAME</th>
      <th scope="col">CONTACT</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
<?php
 $no=1;
$select="SELECT * FROM STUDENT_DATABASE";
$query=mysqli_query($con,$select);
//AUTO INCREMENT THE SERIALL NUMBER 
if($query){
 
      while($result=mysqli_fetch_assoc($query)){
        // $S_no=$result['S_no'];
        $S_no=$no++;
        $name=$result['NAME'];
        $F_name=$result['FATHERS NAME'];
        $M_name=$result['MOTHERS NAME'];
        $Contact=$result['CONTACT'];
        $Address=$result['ADDRESS'];
echo'
<tr>
<th scope="row">'.$S_no.'</th>
<td>'.$name.'</td>
<td>'.$F_name.'</td>
<td>'.$M_name.'</td>
<td>'.$Contact.'</td>
<td>'.$Address.'</td>
 <td class="my-3"><button class="btn btn-primary"><a href="update.php? updateid='.$result['S_no'].'" class="text-light"> UPDATE</a></button>
<button class="btn btn-danger"> <a href="Delete.php? deleteid='.$result['S_no'].'" class="text-light"> DELETE</a></button>
</td> 

';
}

}

?>
  </tbody>
  <!-- $no++; -->
</table>
    </div>
</body>
</html>