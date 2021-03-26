<?php
$con=mysqli_connect('localhost', 'root', '', 'jb_infotech');

include 'session.php';


function escape($str){
    global $con;
    return mysqli_real_escape_string($con,$str);
}

function query($query){
    
    global $con;
    return mysqli_query($con, $query);
}
?>
