<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <script>
    function parseDimensions() {
      var input = document.getElementById("dimensions").value;
      var dimensions = input.split("*");
      
      if (dimensions.length === 3) {
        var length = parseInt(dimensions[0].trim(), 10);
        var height = parseInt(dimensions[1].trim(), 10);
        var breadth = parseInt(dimensions[2].trim(), 10);
        
        if (!isNaN(length) && !isNaN(height) && !isNaN(breadth)) {
          // Do something with the length, height, and breadth values
          console.log("Length: " + length);
          console.log("Height: " + height);
          console.log("Breadth: " + breadth);
        } else {
          alert("Invalid input! Length, height, and breadth must be integers.");
          event.preventDefault();
        }
      } else {
        alert("Invalid input! Please use the L*H*B format.");
        event.preventDefault();
      }
    }
  </script>
	<link rel="stylesheet" type="text/css" href="style_form.css">
</head>
<body>


     
     <!-- <a href="logout.php">Logout</a> -->
<!-- form -->
<div class="wrapper">
    <div class="title">
      order for <?php echo $_SESSION['name']; ?>
    </div>
    <form  action="form_submit.php" method="post" class="form">
       <div class="inputfield">
          <label>Order Date</label>
          <input type="date" name="order_date" class="input" required>
       </div>  
        <div class="inputfield">
          <label>Company</label>
          <input type="text" name="company" class="input"  pattern="[a-zA-Z0-9]+" required>
       </div>  
       <div class="inputfield">
          <label>Owner</label>
          <input type="text" class="input" name="owner" pattern="[a-zA-Z0-9]+" required >
       </div>
        <div class="inputfield">
          <label>Item</label>
          <input type="text" name="item" class="input" required>
       </div> 
      <div class="inputfield">
          <label>Quantity</label>
          <input type="number" name="quantity" class="input">
       </div> 
       <div class="inputfield">
          <label>Weight</label>
          <input type="number" name="weight" class="input">
       </div> 
       <div class="inputfield">
          <label>Request for shipment</label>
          <input type="text" name="req_for_ship" class="input">
       </div> 
       <div class="inputfield">
          <label>Tracking ID</label>
          <input type="text" name="tracking_id" class="input">
       </div> 
       <div class="inputfield">
          <label>Shipment Size</label>
          <input type="text" name="size" class="input" id="dimensions" name="dimensions">
       </div> 
       <div class="inputfield">
          <label>Box count</label>
          <input type="number" name="count" class="input">
       </div> 
       <div class="inputfield">
          <label>Specification</label>
          <input type="text" name="spec" class="input">
       </div> 
       <div class="inputfield">
          <label>Checklist quantity</label>
          <input type="text" name="check_quant" class="input">
       </div> 
      <div class="inputfield">
        <input type="submit" value="Submit"  onclick="parseDimensions()" class="btn">
      </div>
    </form>
</div>










</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>