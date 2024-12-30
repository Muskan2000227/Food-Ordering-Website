<?php
session_start();
include('connection.php');
?>

<?php include 'signlogheader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!--  css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" mb-[600px] bg-[url('images/food7.jpg')] bg-cover ">
   

<div>

<section >

<form action="" method="post" class="add-product-for" >
   <h3>Login</h3>
   <input type="text" name="email" placeholder="enter your email" class="box" required>
   <input type="password" name="pass" min="0" placeholder="enter password" class="box" required>

   <input type="submit" value="login" name="Login" class="btn"><br>
   <center><h1>or</h1><br></center>
   <a href=signup.php><center><h1 style="color:black">Register</h1></center></a>
</form>

</section>

</div>















<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<!--User Login-->
<?php
if(isset($_POST['Login'])){
     $email=$_POST['email'];   //database to entry fields
     $pass=$_POST['pass'];

$query="Select * from register where email='$email' && pass='$pass'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
//echo $total;
if($total==1){
   $_SESSION['user_name']=$email;
   header('location:products.php'); //to redirect to home page
   echo"Login ok";
}
else{
   echo"Login failed";
} 
}
?>
<!--Admin login-->
<?php
if(isset($_POST['Login'])){
     $email=$_POST['email'];   //database to entry fields
     $pass=$_POST['pass'];

$query="Select * from login where email='$email' && pass='$pass'";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
//echo $total;
if($total==1){
   $_SESSION['user_name']=$email;
   header('location:admin.php'); //to redirect to home page
   echo"Login ok";
}
else{
   //echo"Login failed";
}
}
?>