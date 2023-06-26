<?php 
session_start(); 
include "db_conn.php";

$query1 = "SELECT Quantity FROM `customer` WHERE cust_id=2;";
$query2 = "SELECT Quantity FROM `customer` WHERE cust_id=3;";
$query3 = "SELECT Weight FROM `customer` WHERE cust_id=2;";
$query4 = "SELECT Weight FROM `customer` WHERE cust_id=3;";
$query5 = "SELECT Box_Count FROM `customer` WHERE cust_id=2;";
$query6 = "SELECT Box_Count FROM `customer` WHERE cust_id=3;";

// FETCHING DATA FROM DATABASE
// Quantity of cust1
$result1 = mysqli_query($conn, $query1);
$total = 0;
$total2 = 0;
$total3 = 0;
$total4 = 0;
$total5 = 0;
$total6 = 0;

if (mysqli_num_rows($result1) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result1)) {
        $total += $row['Quantity'];
    }
    // echo "Total: " . $total . "\n";
} 
// quantity of cust2
$result2 = mysqli_query($conn, $query2);
  
if (mysqli_num_rows($result2) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result2)) {
        $total2 += $row['Quantity'];
    }
    // echo "Total: " . $total2 . "\n";
} 
// Weight of cust1
$result3 = mysqli_query($conn, $query3);
  
if (mysqli_num_rows($result3) > 0) {
    // OUTPUT DATA OF EACH ROW
    while($row = mysqli_fetch_assoc($result3)) {
        $total3 += $row['Weight'];
    }
    // echo "Total: " . $total3 . "\n";
} 

// weight of cust2
$result4 = mysqli_query($conn, $query4);
  
if (mysqli_num_rows($result4) > 0) {
    // OUTPUT DATA OF EACH ROW
    $total4 = 0;
    while($row = mysqli_fetch_assoc($result4)) {
        $total4 += $row['Weight'];
    }
    // echo "Total: " . $total4 . "\n";
} 
// box count of cust1
$result5 = mysqli_query($conn, $query5);
  
if (mysqli_num_rows($result5) > 0) {
    // OUTPUT DATA OF EACH ROW
    $total5 = 0;
    while($row = mysqli_fetch_assoc($result5)) {
        $total5 += $row['Box_Count'];
    }
    // echo "Total: " . $total5 . "\n";
} 

// box count of cust2
$result6 = mysqli_query($conn, $query6);
  
if (mysqli_num_rows($result6) > 0) {
    // OUTPUT DATA OF EACH ROW
    $total6 = 0;
    while($row = mysqli_fetch_assoc($result6)) {
        $total6 += $row['Box_Count'];
    }
    // echo "Total: " . $total6 . "\n";
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Item/Customer</th>
      <th scope="col">Customer1</th>
      <th scope="col">Customer2</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Quantity</th>
      <td> <?php echo $total ;?> </td>
      <td> <?php echo $total2 ;?></td>
      <td> <?php echo $total + $total2 ;?></td>
    </tr>
    <tr>
      <th scope="row">Weight</th>
      <td><?php echo $total3 ;?></td>
      <td> <?php echo $total4 ;?></td>
      <td> <?php echo $total3 + $total4 ;?></td>
    </tr>
    <tr>
      <th scope="row">Box Count</th>
      <td > <?php echo $total5 ;?></td>
      <td > <?php echo $total6 ;?></td>
      <td > <?php echo $total6 + $total5 ;?></td>
    
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>