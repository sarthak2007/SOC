<?php


session_start();
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";
$comments=$_POST['comments'];
$lic=$_POST['doc'];
$aadhar=$_SESSION['a'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FROM patient where AADHAR=".$aadhar;
$result=$conn->query($sql);

$row=$result->fetch_assoc();
$name=$row['Name'];
$sql="SELECT * FROM doctor where LicenseID='".$_SESSION['LicenseID']."'";
$result=$conn->query($sql);

$row=$result->fetch_assoc();
$named=$row['Name'];
$sql = "INSERT INTO ".$lic."_referred (Aadhar,Patient_Name,Comments,Date,Doctor) 
VALUES (".$aadhar.",'".$name."','".$comments."',NOW(),'".$named."')";

if ($conn->query($sql) === TRUE) {
    header('Location:final.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>