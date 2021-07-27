<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$connect=new mysqli($host,$dbusername,$dbpassword,$dbname);
$username = $_SESSION['tempname'];
$password = $_POST['psd'];
$que = "UPDATE login SET password='$password' where username='$username'";

if(mysqli_query($connect,$que))
{
    unset($_SESSION['username']);
    ?>
    <html>
        <head>
            <script src="sweetalert.txt"></script>
        </head>
        <body>
            <script> 
                swal({
        title: "Good job!",
        text: "Password Changed",
        icon: "success",
        })
        .then((willDelete) => {
      if (willDelete) {

                window.location = "index.html";
      } else {
                window.location = "index.html";
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
        text: "Error Occured",
        icon: "error",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "forgotpasswordpage.php";
      } else {
                window.location = "forgotpasswordpage   .php";
      }
    });
        </script>
    
        </body>
    </html>


<?php
}
#}
?>