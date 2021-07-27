<?php
session_start();


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "final_year_project";
$connect=new mysqli($host,$dbusername,$dbpassword,$dbname);
$username = $_POST['urn'];
$password = $_POST['psd'];
$que = "select * from login where username='$username' and password='$password'";
$result=mysqli_query($connect,$que);
$count=mysqli_num_rows($result);
if($count>0)
{
    $_SESSION['username']=$username;
    if(isset($_SESSION['username']))
    {
 
    header("Location:websitehomepage.html");
    
    
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
            text: "You entered username or password wrong",
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

        ?>