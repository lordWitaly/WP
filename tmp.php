<?php
    session_start();
    echo $_SESSION["user"];
    
$x = 1;
$y = 2;
$z = $x + $y;
$u = $_SESSION["user"];



include(getenv("MYAPP_CONFIG"));
$conn = mysqli_connect($DB_URL,$DB_USER,$DB_PWD,$DB_NAME);
//$sql = "INSERT INTO log(Number1,Number2,Result,UserID) VALUES($x,$y,$z,'uriy')";
$sql = "INSERT INTO log(Number1,Number2,Result,UserID) VALUES($x,$y,$z,'$u')";
mysqli_query($conn,$sql);
echo(mysqli_error($conn));
mysqli_close($conn);
echo($z);
    ?>
