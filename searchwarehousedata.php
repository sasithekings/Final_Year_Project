<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style>
            /*button css*/
            body{
            background-image: url(images/20.jpg);
            background-size: cover;
            background-attachment: fixed;
        }

            .btn{
                font-family: "Roboto", sans-serif;
                font-size: 30px;
                font-weight: bold;
                background: black;
                width: 200px;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow, transform;
                transition-property: box-shadow, transform;
                }
            .btn:hover, .btn:focus, .btn:active{
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
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
            background-color: white;
            color:black;
            padding:5px;
            border-radius: 5px;
            margin-right: 20px;
            
        }
        </style>
    </head>
    <body>
        <center>
        <h1 style="color:white; font-weight:bold;">Search Warehouse</h1>

        </center>
        
        <table>
            <tr>
                <th>Username</th>
                <th>Warehousename</th>
                <th>Crops</th>
                <th>Address</th>
                <th>City</th>
                <th>Phno</th>
                <th>Quantity</th>
                <th>price</th>
            </tr>
                <?php
                $areaname = $_POST['city'];

                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "final_year_project";
                $con =new mysqli($host,$dbusername,$dbpassword,$dbname);

                $qu = "SELECT * FROM warehouse WHERE city='$areaname' ORDER BY price ASC";
                if($result = $con->query($qu))
                {
                    if ($result->num_rows > 0) {
    
                        while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["warehousename"] . "</td><td>". $row["crops"]. "</td><td>" . $row["address"]. "</td><td>". $row["city"]. "</td><td>". $row["phno"]. "</td><td>". $row["quantity"]. "</td><td>". $row["price"]. "</td></tr>";
                        }
                        } else { 

                            ?>
                            <html>
                                <head>
                                    <script src="sweetalert.txt"></script>
                                </head>
                                <body>
                                    <script> 
                                        swal({
                                title: "No Record!",
                                text: "No Record Found",
                                icon: "error",
                                })
                                .then((willDelete) => {
                              if (willDelete) {
                                        window.location = "searchwarehousepage.html";
                              } else {
                                        window.location = "searchwarehousepage.html";
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
        </table>
        <br></br>



        <center>
    <br>
    <a href="searchwarehousepage.html" class="lout">Go back</a>
</center>

    
    </body>
    </head>
</html>