<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body{
            background-image: url(images/16.jpg);
        }
    .setb{
            background-image:url('titlebg.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
    .hed{
        font-size: 40px;
        font-weight: bold;00
    }
    .lout {
            text-align: right;
            text-decoration:none;
            font-weight: bold;
            background-color: rgb(107, 107, 190);
            color:white;
            padding:5px;
            border-radius: 5px;
            margin-right: 20px;
        }
        .col{
            position: relative;
            left:410px;
        }
        .hed{
        font-weight: bolder;
        color: black;
    }
    .text-right{
        color: cyan;

    }
 

    .col input[type="text"],[type="number"]{
        border:none;
        border-bottom:2px solid blue;
        
        outline:none;
    }
    input[type="submit"]{
        background-color:red;
        font-weight:bold;
        
    }
    .lb{
            position: relative;
            bottom: 38px;
            left:70px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            color: white;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            font-weight:bold;
            }
            th {
            background-color: green;
            color: yellow;
            }
            tr:nth-child(even) {background-color: black}
            tr{
                font-size:40px;
            }

            .lout {
            text-align: right;
            text-decoration:none;
            font-weight: bold;
            background-color: green;
            color:white;
            padding:5px;
            border-radius: 5px;
            margin-right: 20px;
            
        }

  </style>
    <title>Delete Crops</title>
  </head>
  <body>


    <div class="container-fluid ">
        <div class='row'>
            <div class="col-10">
            <center>
                <l class="hed">DeleteCrops</l>
            </center>
            </div>
            <div class="col-2">
            <center>
                <br>
                <a href="websitehomepage.html" class="lout">Back</a>
            </center>
            </div>
        </div>
    </div>
    <br><br>


    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="images/deletecrops.png" class="float-left" width="70%" heigth="50%" >
            </div>
            <div class="col-8">
                <div class="text-right">
  	                <p style="color: rgb(0, 0, 0); font-size: 30px;">   </p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <table>
            <tr>
                <th>Username</th>
                
                <th>Cropname</th>
                <th>Quantity</th>
                <th>Phno</th>
                <th>price</th>
                
            </tr>
                <?php
                session_start();
                $username=$_SESSION['username'];
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "final_year_project";
                $con =new mysqli($host,$dbusername,$dbpassword,$dbname);

                $qu = "SELECT * FROM crops WHERE username='$username' ORDER BY cropname ASC";
                if($result = $con->query($qu))
                {
                    if ($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["cropname"] . "</td><td>"
                        . $row["quantity"]. "</td><td>". $row["phno"]. "</td><td>". $row["price"]. "</td></tr>";
                        }
                        } else { echo "0 results"; }
                        $con->close();

                }
                

                ?>
        </table>
        <br><br><br>










    <div class="container">
        <div class="row">
            <div class="col">
            
            <form action="deletecropsdata.php" method="POST" class="loginbox">
                <l class="lf" style="color:white;font-weight:bold;font-size:20px;">Crop Name</l><br><br>
                <input type="text" name="crop" placeholder="Enter cropname "><br><br>
                <br><br>
                <input type="submit" name="submit" class="btn btn-secondary" value="Delete">
            
              
            </div>
        </div>
    </div>

   



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>



        
        <br></br>


    
    </body>
    </head>
</html>