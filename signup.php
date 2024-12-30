<?php
@include 'connection.php';
?>
<?php include 'signlogheader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   



<div class="container">

<section>

<form action="" method="post" class="add-product-for" >
   <h3>Register</h3>
   <input type="text" name="name" placeholder="enter your name" class="box" required>
   <input type="email" name="email" min="0" placeholder="enter your email" class="box" required>
   <input type="number" name="number" min="0" placeholder="enter your number" class="box" required>
   <input type="password" name="pass" min="0" placeholder="enter your password" class="box" required>
   <input type="submit" value="Signup" name="signup" class="btn"><br>
   <center><h1>or</h1></center><br>
   <a href=login.php><center><h1>Login</center></h1></a>
</form>

</section>


</div>


<script src="js/script.js"></script>

</body>
</html>

<?php
  if(isset($_POST['signup']))
  {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $pass = $_POST['pass'];
 
  
$query =" INSERT INTO register VALUES('$name','$email','$number','$pass')";
$data= mysqli_query($conn,$query);

if($data){
   echo "You can now Login ";
}
  }
?>


