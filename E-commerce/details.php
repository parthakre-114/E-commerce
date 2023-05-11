<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px; 
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Item Details</h2>


<?php

include 'db_conn.php';

$id = $_GET['key'];

$sel = "SELECT * FROM item_info WHERE id = '$id' ";
$selup = mysqli_query($conn,$sel);

$fet = mysqli_fetch_array($selup);
 ?>
<div class="card">
  <!-- <img src="img/lamp2.png" alt="Metal lamp" > -->
 <?php echo '<img alt="Vintage Lamp" class="lamp" style="width:100%" src="data:image/jpeg;base64,'.base64_encode( $fet['img'] ).'"/>' ?> 

  <h1><?php echo $fet['name']; ?></h1>
  <p class="price"><?php echo $fet['price']; ?></p>
  <p><?php echo $fet['details']; ?></p>
  <p><button>Add to Cart</button></p>
</div>

</body>
</html>
