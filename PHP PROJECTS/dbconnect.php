<?php
    $con=MySQLi_connect('localhost','root','','crud_application');
if(!$con){
    die(MySQLi_connect_error($con));
}
// else{
//     echo'connection sucessfull';
// }
?>