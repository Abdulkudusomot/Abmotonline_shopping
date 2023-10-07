<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Abmot_Home</title>
</head>
<body>
    <?php
      include_once 'header.php';

   ?>

   <main>
       <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               
               <p class="product_name"><?php echo $row["product_name"];  ?></p>
               <p class="price"><b>₦<?php echo $row["price"]; ?></b></p>
               <p class="discount"><b><del>₦<?php echo $row["discount"]; ?></del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
       <?php

          }
     ?>
   </main>
   <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>
   
   
   
</body>
<style>

	.footer{
		position: fixed;
		left:0;
		bottom:0;
		width: 100%;
		height: 25px;
		background-color:yellow;
		color: white;
		text-align: center;
		
	}
</style>
<div class="footer">
     <p>Copyright © ABMOT Online Shopping 2023</p>
</div>

</html>