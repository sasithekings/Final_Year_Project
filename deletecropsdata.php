<?php

$crop = $_POST['crop'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);
session_start();
$username=$_SESSION['username'];
$query="SELECT * FROM crops WHERE username='$username' and cropname='$crop'";
$data=mysqli_query($con,$query);

if ($data->num_rows > 0) {
  

if($data)
{
  $query="DELETE FROM crops WHERE username='$username' and cropname='$crop'";
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
            window.location = "deletecropspage.php";
  } else {
            window.location = "deletecropspage.php";
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
              window.location = "deletecropspage.php";
    } else {
              window.location = "deletecropspage.php";
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
              window.location = "deletecropspage.php";
    } else {
              window.location = "deletecropspage.php";
    }
  });
      </script>
  
      </body>
  </html>
  
  
  <?php
  


}









?>