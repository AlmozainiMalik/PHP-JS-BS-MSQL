<?php 

include './inc/db.php';
include './inc/form.php';

$sql_select = 'SELECT * FROM users';

$result = mysqli_query($connect ,$sql_select );
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($connect);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method = "POST">
    <input type="text" name="firstName" id="firstName" placeholder="First Name">
    <input type="text" name="lastName" id="lastName" placeholder="Last Name">
    <input type="text" name="email" id="email" placeholder="email">
    <input type="submit" name="submit" value="send" >

</form>

<?php foreach($users as $user): ?>
     <h3> <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . ' - ' .  htmlspecialchars($user['email']); ?> </h3>

<?php endforeach; ?>


    <script src="./js/script.js"></script>
</body>
</html>






































