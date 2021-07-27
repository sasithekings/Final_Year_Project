<?php
$phno = $_POST['phno'];
$username = $_POST['urn'];
$password = $_POST['psd'];
$q1=$_POST['q1'];
$a1=$_POST['a1'];
$q2=$_POST['q2'];
$a2=$_POST['a2'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$con =new mysqli($host,$dbusername,$dbpassword,$dbname);


$qu = "Insert into login(phno,username,password,question1,answer1,question2,answer2) values('$phno','$username','$password','$q1','$a1','$q2','$a2')" ;
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
        text: "You Successfully Created An Account",
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
        text: "Username is Already Taken",
        icon: "error",
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


$con->close();

?>