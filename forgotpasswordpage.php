<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Website Name</title>
    <style>
        body{
                background: url(images/1.jpg) no-repeat center center fixed;
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
                color:white;
            }
            input[type="submit"]
                {
                    border: none;
                    outline: none;
                    height: 50px;
                    width: 100px;
                    background: #3755ff;
                    color: rgb(86, 228, 253);
                    font-size: 20px;
                    border-radius: 20px;
                }
                input[type="submit"]:hover
                {
                    cursor: pointer;
                    background: #ffc107;
                    color: #000;
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
                <h1 class="title text-center" style='color: white '>Recovery Form</h1>
                <form id="login-form" method="post" class="form-signin" role="form" action="forgotpasswordpage1.php">
                    <br>
                    <input name="urn" id="urn" type="text" class="form-control disable" placeholder="Username" required autofocus>
                    <br>
                    
                    <center>
                        <input type="submit" placeholder="submit"></input>

                    </center>
                    

                    <br><br><br>
                </form>
                <div class="form-footer">
                    <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7">
                            <i class="fa fa-lock"></i> 
                            <a href="index.html"> Go Back? </a>
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