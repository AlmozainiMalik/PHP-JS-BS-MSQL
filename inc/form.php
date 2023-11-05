<?php
if(isset($_POST['firstName']) || isset($_POST['lastName']) || isset($_POST['email']) ) {

$firstName = $_POST['firstName'];
$lastName =  $_POST['lastName'];
$email =     $_POST['email'];
if (isset($_POST['submit'])){
    // echo $firstName . ' - ' . $lastName . ' - ' . $email;

        $firstName=  mysqli_real_escape_string($connect, $_POST['firstName']); 
        $lastName =  mysqli_real_escape_string($connect, $_POST['lastName']);
        $email    =  mysqli_real_escape_string($connect, $_POST['email']);

        $sql = "INSERT INTO users(firstName , lastName , email) 
                VALUES ('$firstName' , '$lastName' , '$email')";


        if(empty($firstName)){
            echo "Please enter your First Name";
        }elseif(empty($lastName)){
            echo "Please enter your Last Name";

        }elseif(empty($email)){
            echo "Please enter your Email";
        }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            echo "Please enter an existing Email";
        }else {
            if(mysqli_query($connect, $sql)){
                header('Location: index.php');
                 
             }else{
                 echo "Error: " . mysqli_error($connect);
             }   

        }
             
}
}