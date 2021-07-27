<?php
session_start();


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$connect=new mysqli($host,$dbusername,$dbpassword,$dbname);
$username=$_SESSION['tempname'];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$que = "select * from login where username='$username' and answer1='$a1' and answer2='$a2' ";
$result=mysqli_query($connect,$que);
$count=mysqli_num_rows($result);
if($count>0)
{
    
    ?>
    <html>
        <head>
            <script src="sweetalert.txt"></script>
        </head>
        <body>
            <script> 
                swal({
        title: "Good job!",
        text: "You Entered Right Answers",
        icon: "success",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "forgotpasswordpage3.php";
      } else {
                window.location = "forgotpasswordpage3.php";
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
        text: "You Entered Wrong Answers",
        icon: "error",
        })
        .then((willDelete) => {
      if (willDelete) {
                window.location = "forgotpasswordpage.php";
      } else {
                window.location = "forgotpasswordpage.php";
      }
    });
        </script>
    
        </body>
    </html>


<?php
}
#}
?>