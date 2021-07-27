<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body{
            background-image: url(images/19.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    .setb{
            background-image:url('titlebg.jpg');
            background-size:100%;
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

    .col input[type="text"],[type="number"]{
        border:none;
        border-bottom:2px solid blue;
        background: transparent;
        outline:none;
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
                font-size:30px;
            }

  </style>
    <title>Search Warehouse</title>
  </head>

  <body>


    <div class="container-fluid ">
        <div class='row'>
            <div class="col-10">
            <center>
                <l class="hed">Delete Warehouse</l>
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
                <img src="images/search.png" class="float-left" width="70%" heigth="50%" >
            </div>
            <div class="col-8">
                <div class="text-right">
  	                <p> </p>
                </div>
            </div>
        </div>
    </div>
    <br>





        <table>
            <tr>
                <th>Warehousename</th>
                <th>Crops</th>
                <th>Address</th>
                <th>Area</th>
                <th>Phno</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
                <?php
                session_start();
                $username=$_SESSION['username'];
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "final_year_project";
                $con =new mysqli($host,$dbusername,$dbpassword,$dbname);

                $qu = "SELECT * FROM warehouse WHERE username='$username' ORDER BY warehousename";
                if($result = $con->query($qu))
                {
                    if ($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>". $row["warehousename"] . "</td><td>". $row["crops"]. "</td><td>" . $row["address"]. "</td><td>". $row["city"]. "</td><td>". $row["phno"]. "</td><td>". $row["quantity"]. "</td><td>". $row["price"]. "</td></tr>";
                        }
                        } else { echo "0 results"; }
                        $con->close();

                }
                

                ?>
        </table>
        <br></br>

        

        <div class="container">
        <div class="row">
            <div class="col">
            
            <form action="deletewarehousedata.php" method="POST" class="loginbox">
            <l class="lf" style="font-weight:bold;font-size:larger;color:black;">Warehouse Name</l><br><br>
            <input type="text" name="warehouse" placeholder="Enter warehouse "><br><br><br>

            <input type="submit" name="submit" class="btn btn-danger" value="Delete">
        </form>
              
            </div>
        </div>
    </div>



   

    
    </body>
    </head>
</html>