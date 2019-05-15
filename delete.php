<?php
include('config.php');

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

$pic=$_POST["pic"]; 

$sql="DELETE FROM photos WHERE caption='$pic'";
mysqli_query($bd, $sql);

mysqli_close($conn);

?>
