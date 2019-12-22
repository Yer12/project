<?php 

//index.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$message = '';

if(isset($_POST["add_to_cart"]))
{
 if(isset($_COOKIE["shopping_cart"]))
 {
  $cookie_data = stripslashes($_COOKIE['shopping_cart']);

  $cart_data = json_decode($cookie_data, true);
 }
 else
 {
  $cart_data = array();
 }

 $item_id_list = array_column($cart_data, 'item_id');

 if(in_array($_POST["hidden_id"], $item_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
   {
    $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
   }
  }
 }
 else
 {
  $item_array = array(
   'item_id'   => $_POST["hidden_id"],
   'item_name'   => $_POST["hidden_name"],
   'item_price'  => $_POST["hidden_price"],
   'item_quantity'  => $_POST["quantity"]
  );
  $cart_data[] = $item_array;
 }

 
 $item_data = json_encode($cart_data);
 setcookie('shopping_cart', $item_data, time() + (86400 * 30));
 header("location:index.php?success=1");
}

if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
  $cookie_data = stripslashes($_COOKIE['shopping_cart']);
  $cart_data = json_decode($cookie_data, true);
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]['item_id'] == $_GET["id"])
   {
    unset($cart_data[$keys]);
    $item_data = json_encode($cart_data);
    setcookie("shopping_cart", $item_data, time() + (86400 * 30));
    header("location:index.php?remove=1");
   }
  }
 }
 if($_GET["action"] == "clear")
 {
  setcookie("shopping_cart", "", time() - 3600);
  header("location:index.php?clearall=1");
 }
}

if(isset($_GET["success"]))
{
 $message = '
 <div colspan="5" align="center" class="alert alert-success alert-dismissible">
    <a align="center"; style="background-color: white;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Item Added into Cart
 </div>
 ';
}

if(isset($_GET["remove"]))
{
 $message = '
 <div colspan="5" align="center" class="alert alert-success alert-dismissible">
  <a style="background-color: white;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Item removed from Cart
 </div>
 ';
}
if(isset($_GET["clearall"]))
{
 $message = '
 <div colspan="5" align="center" class="alert alert-success alert-dismissible">
  <a style="background-color: white;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Your Shopping Cart has been clear...
 </div>
 ';
}


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Shopping Cart</title>
 </head>
 <body style="background-image: url('picture1.jpg'); background-size: 100%;">
  <br />
  <div class="container">
   <br />
   <h3 style="font-size: 30px; margin-bottom: -50px; margin-top: -40px; color: black; background: #f1f1f1;" align="center"><a style="text-decoration: none;" href="../registration/page.html">YOUR SHOPPING CARD</a></h3><br />
   <br /><br />
   <?php
   $query = "SELECT * FROM tbl_product ORDER BY id ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
    ?> <div style="display: flex; flex-direction: row;">
   <?php
   foreach($result as $row)
   {
   ?>
 
     
   
   <div class="col-md-3">
    <form  method="post">
     <div style="width: 200px; height: 220px; border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:30px; margin:30px;" align="center">
      <img style="width: 170px; height: 100px;" src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />

      <h4 style="width: 200px; height: 10px;" class="text-info"><?php echo $row["name"]; ?></h4>

      <h4 style="width: 200px; height: 10px;" class="text-danger">$ <?php echo $row["price"]; ?></h4>

      <input type="text" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
     </div>
    </form>
   
   </div>
   <?php
   }
   ?>
   </div>
   
   <div style="clear:both; background-color: white;"></div>
   <br />
  
   <div  style="background-color: white; opacity: 0.85" class="table-responsive">
   <?php echo $message; ?>
   <div style="margin-right:50px; " align="right">
    <a style="text-decoration: none; border:1px solid black; padding: 10px; background-color: grey; color: white; border-radius: 10px;" href="index.php?action=clear"><b>Clear Cart</b></a>
   </div>
   <table class="table table-bordered" style="border-collapse: collapse; border: 1px solid black;">
    <tr>
     <th style="background-color: white; border: 1px solid black; border-collapse: collapse;" width="40%">Item Name</th>
     <th style="background-color: white; border: 1px solid black; border-collapse: collapse;" width="10%">Quantity</th>
     <th style="background-color: white; border: 1px solid black; border-collapse: collapse;" width="20%">Price</th>
     <th style="background-color: white; border: 1px solid black; border-collapse: collapse;" width="15%">Total</th>
     <th style="background-color: white; border: 1px solid black; border-collapse: collapse;" width="5%">Action</th>
    </tr>
   <?php
   if(isset($_COOKIE["shopping_cart"]))
   {
    $total = 0;
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
    foreach($cart_data as $keys => $values)
    {
   ?>
    <tr>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;"><?php echo $values["item_name"]; ?></td>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;"><?php echo $values["item_quantity"]; ?></td>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;">$ <?php echo $values["item_price"]; ?></td>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;"><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
    </tr>
   <?php 
     $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
   ?>
    <tr>
     <td style="background-color: white; border: 1px solid black; border-collapse: collapse;" colspan="3" align="right">Total</td>
     <td  style="background-color: white; border: 1px solid black; border-collapse: collapse;" align="right">$ <?php echo number_format($total, 2); ?></td>
     <td></td>
    </tr>
   <?php
   }
   else
   {
    echo '
    <tr>
     <td style="background-color: white;" colspan="5" align="center">No Item in Cart</td>
    </tr>
    ';
   }
   ?>
   </table>
   </div>
  </div>
  <br />
 </body>
</html>
