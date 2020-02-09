<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "webpagelogin");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST["Username"]);
$last_name = mysqli_real_escape_string($link, $_REQUEST["Password"]);
$email = mysqli_real_escape_string($link, $_REQUEST["E-Mail"]);

// Attempt insert query execution

$sql = "INSERT INTO user (name, password, email) VALUES ('$first_name', '$last_name', '$email')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    echo "\r\n";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
