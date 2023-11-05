<?php 

$connect = mysqli_connect('localhost' , 'root' , 'root' , 'win');

if(!$connect){
    echo "Error" . mysqli_connect_error();
}



?>