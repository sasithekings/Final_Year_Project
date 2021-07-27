<?php

$warehousename = $_POST['warehouse'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);
session_start();
$username=$_SESSION['username'];
$query="SELECT * FROM warehouse WHERE username='$username' and warehousename='$warehousename'";
$data=mysqli_query($con,$query);



if ($data->num_rows > 0) {
  

if($data)
{
  $query="DELETE FROM warehouse WHERE username='$username' and warehousename='$warehousename'";
  $data=mysqli_query($con,$query);


  ?>
  <html>
      <head>
          <script src="sweetalert.txt"></script>
      </head>
      <body>
          <script> 
              swal({
      title: "Good job!",
      text: "Record Deleted",
      icon: "success",
      })
      .then((willDelete) => {
    if (willDelete) {
              window.location = "deletewarehousepage.php";
    } else {
              window.location = "deletewarehousepage.php";
    }
  });
      </script>
  
      </body>
  </html>
  
  
  <?php

  

}
else{


  ?>
  <html>
      <head>
          <script src="sweetalert.txt"></script>
      </head>
      <body>
          <script> 
              swal({
      title: "Try Again!",
      text: "Failed to Delete",
      icon: "error",
      })
      .then((willDelete) => {
    if (willDelete) {
              window.location = "deletewarehousepage.php";
    } else {
              window.location = "deletewarehousepage.php";
    }
  });
      </script>
  
      </body>
  </html>
  
  
  <?php



  
}
}
else
{

  
  ?>
  <html>
      <head>
          <script src="sweetalert.txt"></script>
      </head>
      <body>
          <script> 
              swal({
      title: "Warning!",
      text: "No Record Found",
      icon: "warning",
      })
      .then((willDelete) => {
    if (willDelete) {
              window.location = "deletewarehousepage.php";
    } else {
              window.location = "deletewarehousepage.php";
    }
  });
      </script>
  
      </body>
  </html>
  
  
  <?php
  


 

}










?>