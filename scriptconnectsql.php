
<?php
$server_name = 'localhost';
$login =  'username';
$password= 'PASSWORD';

//create connection "NEW"

$conn = new mysqli($server_name, $login, $password);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error. "<br>");}
    else{echo '<p>Connected successfully</p>'; }
?>