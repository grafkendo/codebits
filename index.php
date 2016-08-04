<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
<div>
   <!-- <?php phpinfo(); ?> -->
   <!-- cpmmmet tptje database at local host -->
   <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection


$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
   ?>

<!--output from database -->
<?php
$sql = "SELECT * FROM mitch.persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " <div> id: " . $row["PersonID"]. " - Name: " . $row["LastName"]. " " . $row["FirstName"]. "<br> </div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</div>
        HELLO WORLD!
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
    </body>
</html>