<?php
include('connection.php');
if(isset($_POST['done'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile_number = $_POST['mobile_number'];
  $no_people = $_POST['no_people'];
  $address = $_POST['address'];
  $query = "SELECT * FROM tour";
 
}
?>
<html>
<head>
  <title>

  </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning ">Your Existing trip</h1>
    <table class="table table-striped table-hover table-bordered">
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Number in People</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    <?php 
        include "connection.php";
        $query="SELECT * FROM tour";
        $data=mysqli_query($conn, $query);
        while($res = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo $res['username']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><?php echo $res['mobile_number']; ?></td>
        <td><?php echo $res['no_people']; ?></td>
        <td><?php echo $res['address']; ?></td>
        <td><button type="button" class="btn btn-primary"><a class="text-white" href="edit.php?id=<?php echo $res['id'];?>">Update</a></button></td>
        <td><button type="button" class="btn btn-danger"><a class="text-white" href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
      </tr>
      <?php
        }
      ?>
      
    </table>
</body>