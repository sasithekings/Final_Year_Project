<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Website Name</title>
    <style>
        body{
                background: url(images/3.jpg) no-repeat center center fixed;
                background-size: cover;

            }
            .but{
                background-color:rgb(255, 255, 255);
                font-family:cursive;
                font-size:15px;
                padding:5px;
                border-radius: 5px;
                color:white;
            }
            a{
                text-decoration: none;
                font-weight: bold;
                color:rgb(255, 255, 255);
            }
            input[type="submit"]
                {
                    border: none;
                    outline: none;
                    height: 40px;
                    width: 80px;
                    background: #3755ff;
                    color: rgb(86, 228, 253);
                    font-size: 20px;
                    border-radius: 20px;
                }
                input[type="submit"]:hover
                {
                    cursor: pointer;
                    background:green;
                    color: white;
                }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
            
            </div>
            <div class="col-3">
                <div class="login-form">
                <h1 class="title text-center">Recovery Form</h1>
                <br>
                <br>
                <form id="login-form" method="post" class="form-signin" role="form" action="forgotpasswordpage2.php">
                    <?php
                                    session_start();
                                    $_SESSION['tempname']=$_POST['urn'];
                                    $username = $_POST['urn'];

                                    $host = "localhost";
                                    $dbusername = "root";
                                    $dbpassword = "";
                                    $dbname = "final_year_project";
                                    $con =new mysqli($host,$dbusername,$dbpassword,$dbname);

                                    $qu = "SELECT question1 FROM login WHERE username='$username' ";
                                    if($result = $con->query($qu))
                                    {
                                        if ($result->num_rows == 1) {
                                            $row = $result->fetch_assoc();

                                            echo  "<p style='font-size:30px'>".$row['question1']."</p>" ;
                                            }
                                            
                                            $con->close();

                                    }
                                                ?>          





                    <input name="a1" id="a1" type="text" class="form-control disable" placeholder="Answer" required autofocus>
                    <br>
                   


                    <?php
                                    $username = $_POST['urn'];

                                    $host = "localhost";
                                    $dbusername = "root";
                                    $dbpassword = "";
                                    $dbname = "final_year_project";
                                    $con =new mysqli($host,$dbusername,$dbpassword,$dbname);

                                    $qu = "SELECT question2 FROM login WHERE username='$username' ";
                                    if($result = $con->query($qu))
                                    {
                                        if ($result->num_rows == 1) {
                                            $row = $result->fetch_assoc();

                                            echo  "<p style='font-size:30px'>".$row['question2']."</p>" ;
                                            }
                                             else { 



                                                                                    
                                                ?>
                                                <html>
                                                    <head>
                                                        <script src="sweetalert.txt"></script>
                                                    </head>
                                                    <body>
                                                        <script> 
                                                            swal({
                                                    title: "Error!",
                                                    text: "Username Not Found",
                                                    icon: "wrong",
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
                                            $con->close();

                                    }
                                                ?>          









                    <input name="a2" id="a2" type="text" class="form-control disable" placeholder="Answer" required autofocus>
                    <br>
                    <center>
                        <input type="submit" placeholder="Register"></input>

                    </center>
                    

                    <br>
                </form>
                <div class="form-footer">
                    <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7">
                            <i class="fa fa-lock"></i> 
                            <a href="forgotpasswordpage.php"> Go Back? </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
    
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>