<?php
  
  require_once 'connection.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">

</head>
<body>
     <header>
         <h1><a href="home.php"><img style="width: 50px; height: 40px;" src="logo.jpg" alt="">Abmot</a></h1>
         <div id="main_tabs">
             <a href="upload.php">Upload</a>
             <a href="Home.php">Home</a>
			 <a href="Our_product.php">Our-Products</a>
             <a href="contact_us.php">Contact-Us</a>
			 <a href="about_us.php">About-Us</a>
			  <a href="signup.php">Sign-up</a>
         </div>
         <a href="cart.php">Cart <span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span></a>
     </header>
</body>
</html>