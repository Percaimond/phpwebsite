<?php

$conn=mysqli_connect("localhost","root","","webpagelogin");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "INSERT INTO user (name, password, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>