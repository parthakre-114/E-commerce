<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="catagories.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagories page</title>
</head>
<body>
    <h1>TABLE LAMP</h1>
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 30%;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .lamp{
          height: 150px;
          width: 150px
        }
        </style>
<div class="row">
<script type="text/javascript">
  
  function call() {
    // body...
   // alert("hi");

window.location = "/details.php?key="+$id+" ";
    <?php 
    //header("Location: details.php?id=".urlencode($id));
?>
  }
</script>


<?php   
include('db_conn.php');

function getid($id){


}





$fet = "SELECT * FROM item_info WHERE categories='lamp'";
$fetup = mysqli_query($conn,$fet);

$fetrow = mysqli_num_rows($fetup);

$i = 0;

if ($fetrow > 0) {
  // code...

while ($fetch = mysqli_fetch_array($fetup)) {
  ?>
  <?php 
  // code..<?php getid($id)

 $id = $fetch['id'];

 
  ?>
 <div class="column" style="background-color:#aaa;">

        <h2> <?php echo $fetch['name']; ?> </h2>
         <?php echo '<img alt="Vintage Lamp" class="lamp" src="data:image/jpeg;base64,'.base64_encode($fetch['img']).'"/>' ?> 
<p><?php echo $fetch['price'];?><a href="details.php?key=<?php echo $id; ?>"> <button type="submit" name="id" value="<?php echo $id; ?>">Add to Cart</button> </a></p>
      </div>
      <?php 
      $i++;?>

<?php 
}
}
?>
</div>
    
    <!--  
      <div class="column" style="background-color:#bbb;">
        <h2>Metal touch</h2>
        <img src="img/lamp2.png" alt="Vintage Lamp" class="lamp">
        <p>Rs.599 <button>Add to Cart</button></p>
      </div>
       <div class="column" style="background-color:#aaa;">
        <h2>Clean marble</h2>
        <img src="img/lamp3.png" alt="Vintage Lamp" class="lamp">
        <p>Rs.499 <button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Idika lamp</h2>
        <img src="img/lamp4.png" alt="Vintage Lamp" class="lamp">
        <p>Rs.399 <button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#aaa;">
        <h2>Homesake lamp</h2>
        <img src="img/lamp5.png" alt="Vintage Lamp" class="lamp">
        <p>Rs.699 <button>Add to Cart</button></p>
      </div>
    </div> 
 -->


    <h1>MIRRORS</h1>
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 20%;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .mirrors{
          height: 150px;
          width: 150px
        }
        </style>
    <div class="row">

      <?php 
$fet_m = "SELECT * FROM item_info WHERE categories='mirror'";
$fetup_m = mysqli_query($conn,$fet_m);

$fetrow_m = mysqli_num_rows($fetup_m);

$i = 0;

if ($fetrow_m > 0) {
  // code...

while ($fetch_m = mysqli_fetch_array($fetup_m)) {

   $id = $fetch_m['id'];

  ?>


  <?php 
  // code...

 
  ?>
 <div class="column" style="background-color:#aaa;">
        <h2> <?php echo $fetch_m['name']; ?> </h2>
         <?php echo '<img alt="Vintage Lamp" class="lamp" src="data:image/jpeg;base64,'.base64_encode( $fetch_m['img'] ).'"/>' ?> 
        <p><?php echo $fetch_m['price']; ?> <a href="details.php?key=<?php echo $id; ?>"> <button>Add to Cart</button></a></p>
      </div>
      <?php 
      $i++;?>

<?php 
}
}
?>
</div>
     <!--  <div class="column" style="background-color:#aaa;">
        <h2>Column 1</h2>
        <img src="img/mirror1.png" alt="Vintage Lamp" class="mirrors">
        <p>Rs.500<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/mirror3.png" alt="Vintage Lamp" class="mirrors">
        <p>Rs.699<button>Add to Cart</button></p>
      </div>
       <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
         <img src="img/mirro2.png" alt="Vintage Lamp" class="mirrors">
        <p>Rs.300<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/mirror4.png" alt="Vintage Lamp" class="mirrors">
        <p>Rs.499<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#ccc;">
        <h2>Column 3</h2>
        <img src="img/mirror5.png" alt="Vintage Lamp" class="mirrors">
        <p>Rs.299<button>Add to Cart</button></p>
      </div>
    </div>  -->

    <h1>CANDLES</h1>
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 20%;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .candles{
          height: 150px;
          width: 150px
        }
        </style>


 <div class="row">

      <?php 
$fet_c = "SELECT * FROM item_info WHERE categories='candle'";
$fetup_c = mysqli_query($conn,$fet_c);

$fetrow_u = mysqli_num_rows($fetup_c);

$i = 0;

if ($fetrow_u > 0) {
  // code...

while ($fetch_c = mysqli_fetch_array($fetup_c)) {
   $id = $fetch_c['id'];

  ?>


  <?php 
  // code...

 
  ?>
 <div class="column" style="background-color:#aaa;">
        <h2> <?php echo $fetch_c['name']; ?> </h2>
         <?php echo '<img alt="Vintage Lamp" class="lamp" src="data:image/jpeg;base64,'.base64_encode( $fetch_c['img'] ).'"/>' ?> 
        <p><?php echo $fetch_c['price']; ?> <a href="details.php?key=<?php echo $id; ?>"><button >Add to Cart</button></a></p>
      </div>
      <?php 
      $i++;?>

<?php 
}
}
?>
</div>



<!-- 

    <div class="row">
      <div class="column" style="background-color:#aaa;">
        <h2>Column 1</h2>
        <img src="img/candle1.png" alt="Vintage Lamp" class="candles">
        <p>Rs.499<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/candle2.png" alt="Vintage Lamp" class="candles">
        <p>Rs.499<button>Add to Cart</button></p>
      </div>
       <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/candle3.png" alt="Vintage Lamp" class="candles">
        <p>Rs.599<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/candle4.png" alt="Vintage Lamp" class="candles">
        <p>Rs.599<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#ccc;">
        <h2>Column 3</h2>
        <img src="img/candle5.png" alt="Vintage Lamp" class="candles">
        <p>Rs.289<button>Add to Cart</button></p>
      </div>
    </div> 

 -->





    <h1>VASES</h1>
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 20%;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .vases{
          height: 150px;
          width: 150px
        }
        </style>


 <div class="row">

      <?php 
$fet_v = "SELECT * FROM item_info WHERE categories='vases'";
$fetup_v = mysqli_query($conn,$fet_v);

$fetrow_v = mysqli_num_rows($fetup_v);

$i = 0;

if ($fetrow_v > 0) {
  // code...

while ($fetch_v = mysqli_fetch_array($fetup_v)) {
  ?>


  <?php 
  // code...
 $id = $fetch_v['id'];

 
  ?>
 <div class="column" style="background-color:#aaa;">
        <h2> <?php echo $fetch_v['name']; ?> </h2>
         <?php echo '<img alt="Vintage Lamp" class="lamp" src="data:image/jpeg;base64,'.base64_encode( $fetch_v['img'] ).'"/>' ?> 
        <p><?php echo $fetch_v['price']; ?> <a href="details.php?key=<?php echo $id; ?>"><button>Add to Cart</button></a></p>
      </div>
      <?php 
      $i++;?>

<?php 
}
}
?>
</div>




    <!-- <div class="row">
      <div class="column" style="background-color:#aaa;">
        <h2>Column 1</h2>
        <img src="img/vases.png" alt="Vintage Lamp" class="vases">
        <p>Rs.599<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/vases1.png" alt="Vintage Lamp" class="vases">
        <p>Rs.955<button>Add to Cart</button></p>
      </div>
       <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/vases2.png" alt="Vintage Lamp" class="vases">
        <p>Rs.955<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/vases4.png" alt="Vintage Lamp" class="vases">
        <p>Rs.488<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#ccc;">
        <h2>Column 3</h2>
        <img src="img/vases5.png" alt="Vintage Lamp" class="vases">
        <p>Rs.488<button>Add to Cart</button></p>
      </div>
    </div>  -->
    <h1>WALL ART</h1>
    <style>
        * {
          box-sizing: border-box;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 20%;
          padding: 10px;
          height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        .wall{
          height: 150px;
          width: 150px
        }
        </style>



 <div class="row">

      <?php 
$fet_w = "SELECT * FROM item_info WHERE categories='wall'";
$fetup_w = mysqli_query($conn,$fet_w);

$fetrow_w = mysqli_num_rows($fetup_w);

$i = 0;

if ($fetrow_w > 0) {
  // code...

while ($fetch_w = mysqli_fetch_array($fetup_w)) {
  ?>


  <?php 
  // code...
 $id = $fetch_w['id'];

 
  ?>
 <div class="column" style="background-color:#aaa;">
        <h2> <?php echo $fetch_w['name']; ?> </h2>
         <?php echo '<img alt="Vintage Lamp" class="lamp" src="data:image/jpeg;base64,'.base64_encode( $fetch_w['img'] ).'"/>' ?> 
        <p><?php echo $fetch_w['price']; ?> <a href="details.php?key=<?php echo $id; ?>"><button>Add to Cart</button></a></p>
      </div>
      <?php 
      $i++;?>

<?php 
}
}
?>
</div>





   <!--      
    <div class="row">
      <div class="column" style="background-color:#aaa;">
        <h2>Column 1</h2>
        <img src="img/wall1.png" alt="Vintage Lamp" class="wall">
        <p>Rs.799<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/wall2.png" alt="Vintage Lamp" class="wall">
        <p>Rs.509<button>Add to Cart</button></p>
      </div>
       <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/wall3.png" alt="Vintage Lamp" class="wall">
        <p>Rs.509<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#bbb;">
        <h2>Column 2</h2>
        <img src="img/wall4.png" alt="Vintage Lamp" class="wall">
        <p>Rs.677<button>Add to Cart</button></p>
      </div>
      <div class="column" style="background-color:#ccc;">
        <h2>Column 3</h2>
        <img src="img/wall5.png" alt="Vintage Lamp" class="wall">
        <p>Rs.540<button>Add to Cart</button></p>
      </div>
    </div>  -->
</body>
</html>