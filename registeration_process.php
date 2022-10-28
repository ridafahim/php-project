<?php 


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['user_pass'];

//hashing the password
$password = password_hash($password, PASSWORD_DEFAULT);

$conn = new mysqli("localhost","root","","hmusic");

$sql = "SELECT * FROM users WHERE username = '{$username}'";
$res = $conn->query($sql);
if($res->num_rows != 0){
    echo("user with same name already exist");
    die();
}
//user_id	first_name	last_name	user_name	user_pass	last_seen	reg_date	
//username password first_name last_name reg_date last_seen photo

$last_seen = time();
$reg_date = time();
 
$sql_1 = "INSERT INTO  users (
    
   
    username,
    password,
    first_name,
    last_name,
    reg_date,
   last_seen
    
    ) VALUES (
        '$username',
        '$password',
        '$first_name',
        '$last_name',
        '$reg_date',
        '$last_seen'
    
)";

if($conn->query($sql_1)){
?>
<h2>  <?php  echo "successfully login Welcome to sound.com"; ?> </h2> <?php
    header("Location: welcome.php");
		die();
}else{
    echo("failed...");
}

?>
