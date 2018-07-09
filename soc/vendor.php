

<!----------SESSION START------------------>

<?php 

session_start();
if(!isset($_SESSION['ID']))
  header('Location:as_vendor.php');
?>



<!------------MAIN HTML PAGE------------------->



<!DOCTYPE html>

<html>

<head>



<!----for qualification icon--->

  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="medhelp blue.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!--------speciality icon------------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<title>Vendor</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<!---------------PIE CHART-------------------->





//function for counting the respective no of patients



<!-------------------Basic css from w3 school------------------>







<style>



 /*------thats the table style---*/



table {

    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;

    border-collapse: collapse;

    width: 100%;

}



td, th {

    border: 1px solid #ddd;

    padding: 8px;

}



tr:nth-child(even){background-color: #f2f2f2;}



tr:hover {background-color: #ddd;}



th {

    padding-top: 12px;

    padding-bottom: 12px;

    text-align: left;

    background-color: #4CAF50;

    color: white;

}

body { 
  background: url(bkgf.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}






</style>



<!-------------positioning of piechart-------------------->



<style>

#chartContainer{

position:fixed;

top:390px;

}




</style>



</head>

<!---------------------------------------MAIN BODY STARTS FROM HERE--------------------------------->



<body >



<!-- Navbar -- the LOG OUT BUTTON-->

<div class="w3-top" >

 <div class="w3-bar w3-theme-d5 w3-left-align w3-large" >
    <span style='position: relative;height: 100%;width: 3%;float: left;vertical-align: middle;'><a href='login_page.php' class="w3-bar-item w3-padding-large w3-theme-d5 w3-left" style="position: relative;text-decoration: none;width: 20%;vertical-align: middle;"><img src='medhelp blue.png' style='height: 22px;width: 22px;float: left;vertical-align: middle;margin-top:4px 
    '></span></a>
    <a href="vendor.php" class="w3-bar-item w3-button w3-hover-white w3-padding-large w3-theme-d5" style="text-decoration: none"><i class="fa fa-home w3-margin-right"></i>HOME</a>
    <a href="as_vendor.php" class="w3-bar-item w3-hover-white w3-button w3-padding-large w3-right w3-theme-d5" style="text-decoration: none"><i class="fa fa-sign-out w3-margin-right" ></i>LOGOUT</a>

 </div>

 </div>




<!----------------------------PROFILE PART---------->



<!-- Page Container -->

<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px" >    

  <!-- The Grid -->

  <div class="w3-row" >

    <!-- Left Column -->

    <div class="w3-col m3" >

      <!-- Profile -->

      <div class="w3-card w3-round" style="position: fixed;width: 22%;left:5%;margin-top:0.8%;background-color:  rgba(255, 255, 255, 0.65);color:black" id="profile">

        <div class="w3-container" >

         <h2 class="w3-center">Profile</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "sarthak2007";
$dbname = "SOC";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$lic=$_SESSION['ID'];
$sql = "SELECT * FROM lab_list where lab_id='".$lic."'";
//else echo 0;
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);
?>   



<hr>

<p style='text-color: #666666;font-size:18px'>&nbsp&nbsp&nbsp<i class='fa fa-pencil' style='font-size:24px;color: #666666'></i>&nbsp&nbsp<b>LABORATORY'S NAME:</b> <?php
echo $row['lab_name'];
?>
</p>

<br><br>

<p style='text-color: #666666;font-size:18px'>&nbsp&nbsp&nbsp<i class='fa fa-pencil' style='font-size:24px;color: #666666'></i>&nbsp&nbsp<b>ADDRESS:</b> <?php
echo $row['address'];
?>
</p>

<br><br>
<p style='text-color: #666666;font-size:18px'>&nbsp&nbsp&nbsp<i class='fa fa-pencil' style='font-size:24px;color: #666666'></i>&nbsp&nbsp<b>CONTACT DETAILS:</b> <?php
echo $row['conatact_no'];
?>
</p>

<br>

<br><br>





      </div>

    </div>

  <br>

      

      <!-- Accordion -->

        

      <br>

     </div>



<!------------------------------------------NEW PATIENTS------------------------------------------------------->  

<div class="w3-col m7" style="width: 75%;">



      <div style='background-color:  rgba(255, 255, 255, 0.65);color:black' class="w3-container w3-card w3-round w3-margin" id="curnt"><br>

        <img src="curr.png"  style="width:60px;float: left;">

        <h2 align="center">NEW PATIENT</h2>

        <hr class="w3-clear">

        <form action="ven1.php" method="post">

          <center>

            ENTER AADHAR NUMBER: <input type="text" name='aadhar_no' required>

            <br>

            <br>

            ENTER SERIAL NUMBER: <input type="text" name='serial_no' required>

            <br>

            <br>

            <button type="submit"  class="w3-button  w3-margin-bottom" style="border-radius: 10px;background-color: #2aa22a;border: none;
    color: white;">SUBMIT</button>

          </center>

        </form>

        <br>

          <!-- <div class="w3-row-padding" style="margin:0 -16px">

            

            

        </div>  -->

      </div>

<hr>

<!--------------------------------------CURRENT PATIENTS------------------------------------------------------->

      <div style='background-color:  rgba(255, 255, 255, 0.65);color:black' class="w3-container w3-card w3-round w3-margin" id="curnt"><br>

        <img src="new_patient2png.png"  style="width:60px;float: left;">

        <h2 align="center">DUE PATIENTS</h2>

        <hr class="w3-clear">

       <?php

$servername="localhost";
$username="root";
$password="sarthak2007";
$dbname="SOC";

$conn=new mysqli($servername,$username,$password,$dbname);

echo "<table>
        <tr>
         <th>AADHAR</th>
         <th>ENTRY NUMBER</th>
         <th>TIME OF ENTRY</th>
        </tr>";

$sql="SELECT * FROM ".$_SESSION['ID']." where Status='I'";

$result=$conn->query($sql);

while($row=$result->fetch_assoc())
{
  echo "<tr>
          <td>".$row['Aadhar']."</td>
          <td>".$row['PSno']."</td>
          <td>".$row['Date']." </td>
        </tr>";
}
echo "</table>";
$conn->close();
?>   

        </form>

        <br>
<!-- 
          <div class="w3-row-padding" style="margin:0 -16px">

            

            

        </div> 
 -->
      </div>

<hr>



<!--------------------------UPLOAD FILE-------------------------------------------------------->

<div style='background-color:  rgba(255, 255, 255, 0.65);color:black' class="w3-container w3-card w3-round w3-margin"><br>

        <img src="upload.png"  style="width:60px;float: left;">

        <h2 align="center">UPLOAD FILE</h2>

        <hr class="w3-clear">

        <form action="upl.php" method="post" enctype="multipart/form-data">

          <center>

            ENTER AADHAR NUMBER: <input type="text" name='aadhar_no' required>

            <br>

            <br>

            <pp style="position:relative;left:0.3%;">ENTER SERIAL NUMBER:</pp> <input type="text" style="position:relative;left:0.5%;" name='serial_no' required>

            <br>

            <br>

            <pp style="position:relative;left:-5.3%;">UPLOAD FILE:</pp> <input type="file" name='UploadFileField' id="UploadFileField" style="position:relative;left:18%;top:-25px;" required >

            <button type="submit"  class="w3-button  w3-margin-bottom" style="border-radius: 10px;background-color: #2aa22a;border: none;
    color: white;">UPLOAD IMAGE</button>

          </center>

        </form>

        <br>

          <div class="w3-row-padding" style="margin:0 -16px">

            

            

        </div> 

      </div>

</div>



</body>

</html>