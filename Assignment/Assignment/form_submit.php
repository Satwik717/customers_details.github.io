<?php
session_start(); 
include "db_conn.php";
// if(isset($_POST['submit']))
// {    

    if($_SESSION['name']=="customer1"){
        $cust_id = 2;

    }
    elseif($_SESSION['name']=="customer2"){
        $cust_id = 3;

    }
    else{
        echo '<script>alert("Something went wrong")</script>';
    }
     $order_date = $_POST['order_date'];
     $owner = $_POST['owner'];
     $item = $_POST['item'];
     $quantity = $_POST['quantity'];
     $weight = $_POST['weight'];
     $req_for_ship = $_POST['req_for_ship'];
     $tracking_id = $_POST['tracking_id'];
     $size = $_POST['size'];
     $count = $_POST['count'];
     $spec = $_POST['spec'];
     $check_quant = $_POST['check_quant'];
     $company= $_POST['company'];
    
     
     $sql = "INSERT INTO customer (cust_id,order_date,Owner,Item,Quantity,Weight,Request_for_Shipment,Tracking_ID,Shipment_Size,Box_Count,Specification,CheckList_Quantity,Company)
     VALUES ('$cust_id','$order_date','$owner','$item', '$quantity','$weight', '$req_for_ship','$tracking_id', '$size', '$count', '$spec', '$check_quant', '$company' )";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New record has been added successfully !")</script>';

   
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

header("Location: home.php");
	exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>