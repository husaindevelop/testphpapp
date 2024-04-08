<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
     $servername = "husaindevelops.c9oi84oo6l31.ap-south-1.rds.amazonaws.com";
     $username = "admin";
     $password = "husaindev29db";
     $database = "indomitra_appmng";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $database);
     
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     
     $sitei=mysqli_fetch_array (mysqli_query ($conn,"select * from indomitra_appmng.accounts"));
     echo $sitei [0];
echo "Hello";
    ?>
    </body>
</html>
