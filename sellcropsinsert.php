<?php
$cropname = $_POST['cropname'];
$quan = $_POST['quantity'];
$phno = $_POST['phno'];
$price = $_POST['price'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);

session_start();

$qu = "INSERT into crops values('".$_SESSION['username']."','$cropname','$quan','$phno','$price')" ;
$run = mysqli_query($con,$qu);
if($run){
    ?>
    <html>
        <head>
            <script src="sweetalert.txt"></script>
        </head>
        <body>
            <script> 
                swal({
        title: "Good job!",
        text: "Crop Added Successfully",
        icon: "success",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "sellcropsform.html";
      } else {
                window.location = "sellcropsform.html";
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
        text: "Connection to the server has been lost",
        icon: "error",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "sellcropsform.html";
      } else {
                window.location = "sellcropsform.html";
      }
    });
        </script>
    
        </body>
    </html>
    
    <?php
}


$con->close();

?>
