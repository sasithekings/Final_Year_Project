

<?php
$warehousename = $_POST['warehousename'];
$crops = $_POST['crops'];
$address = $_POST['address'];
$city = $_POST['city'];
$phno = $_POST['phno'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);

session_start();

$qu = "INSERT into warehouse values('".$_SESSION['username']."','$warehousename','$crops','$address','$city','$phno','$quantity','$price')" ;
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
        text: "Added successfully",
        icon: "success",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "addwarehouseform.html";
      } else {
                window.location = "addwarehouseform.html";
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
        text: "Ware house name already taken",
        icon: "error",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "addwarehouseform.html";
      } else {
                window.location = "addwarehouseform.html";
      }
    });
        </script>
    
        </body>
    </html>
    
    
    <?php

   
    
}


$con->close();

?>