<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style>
            body{
            background-image: url(images/13.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
            /*button css*/
            .btn{
                font-family: "Roboto", sans-serif;
                font-size: 20px;
                font-weight: bold;
                background: blue;
                width: 100px;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                color: white;
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
            background-color: black;
            color:white;
            padding:5px;
            border-radius: 5px;
            margin-right: 20px;
            
        }
        </style>
    </head>
    <body>
        <center>
        <h1 style="color: rgb(0, 0, 0); font-size: 40px;">Crops Details</h1>

        </center>
        

        <br><br><br><br>
        <table>
            <tr>
                <th>username</th>
                <th>cropname</th>
                <th>quantity</th>
                <th>phno</th>
                <th>price</th>
            </tr>
                <?php
                if(isset($_POST['cropname']))
                {
                    $cropname = $_POST['cropname'];

                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "final_year_project";
                    $con =new mysqli($host,$dbusername,$dbpassword,$dbname);
    
                    $qu = "SELECT * FROM crops WHERE cropname='$cropname' ORDER BY price ASC";
                    if($result = $con->query($qu))
                    {
                        if ($result->num_rows > 0) {
        
                            while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["username"]. "</td><td>" . $row["cropname"] . "</td><td>"
                            . $row["quantity"]. "</td><td>". $row["phno"]. "</td><td>". $row["price"]. "</td></tr>";
                            }
                            } else { 



                                                                    
                                    ?>
                                    <html>
                                        <head>
                                            <script src="sweetalert.txt"></script>
                                        </head>
                                        <body>
                                            <script> 
                                                swal("No Crops!");
                                        </script>
                                    
                                        </body>
                                    </html>
                                    
                                    
                                    <?php
                                    
                             }
                            $con->close();
    
                    }
                }
                
                

                ?>
        </table>
        <br></br>

    
        <div class="container-fluid ">

            <center>
                <br>
                <a href="comparecropspage.html" class="lout">Go back</a>
            </center>
        
        </div>
    <br>
 
    
    </body>
    </head>
</html>