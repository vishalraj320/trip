<?php
include ("connection.php");
error_reporting(0);
if(isset($_POST['done'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile_number =$_POST['mobile_number'];
  $no_people =$_POST['no_people'];
  $address = $_POST['address'];
  $query = "UPDATE tour set id=$id, username='$username', email='$email', mobile_number='$mobile_number', no_people='$no_people', address='$address' WHERE id=$id";
  $data = mysqli_query($conn,$query);  
  header('location:display.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trip</title>
    <script src="https://kit.fontawesome.com/4eae1b660b.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <!--Custom stylesheet-->
     <link rel="stylesheet" href="style.css">
     </head>
<body>
<main>
<div class="container text-center">
  <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-hotel"> My Trip</i></h1>
     
  <div class = "col-lg-6 m-auto" style="float:center">
    <form action = "" method = "POST">
  <br><br><div class="card">

    <div class="card-header bg-dark">
        <h2 class="text-white text-left">Edit your Trip</h2>   
    </div><br>
    <div class="text-left">
        <label for="customer_name"> UserName: </label>
        <input type ="text" class="form-control" id="customer_name" placeholder="Enter Name" name="customer_name"/> <br>  
    
        <label for="email_id"> Email: </label>
        <input type ="text" class="form-control" id="email_id" placeholder="Enter Email" name="email_id"/><br>
    
        <label for="ph_no">Mobile Number: </label>
        <input type ="text" class="form-control" id="ph_no" placeholder="Enter Phone Number" name="ph_no"/><br>
    
        <label for="people_no"> People in Number: </label>
        <input type ="text" class="form-control" id="people_no" placeholder="Enter Number of people" name="people_no"/><br>
    
        <label for="address"> Address: </label>
        <input type ="text" class="form-control" id="address" placeholder="Enter Your Address" name="address"/><br>
    
    <button type="submit" class="btn btn-primary" name="done">Submit</button>
   </div>
   </div>
  </form>
</div>





     </div> 

</body>
</html>