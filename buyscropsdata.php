<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style>
            /*button css*/
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
        </style>
    </head>
    <body>
    <table>
            <tr>
                <th>username</th>
                <th>cropname</th>
                <th>quantity</th>
                <th>phno</th>
                <th>price</th>
            </tr>
                <?php
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
                        } else { echo '<script>alert("No Records");</script>'; }
                        $con->close();

                }
                

                ?>
        </table>
        <br></br>


    
    </body>
    </head>
</html>