<?php
include_once('config/connect.php');
$sqlAllProduct = "SELECT COUNT(prd_id) FROM product";
$queryAllProduct = mysqli_query($conn, $sqlAllProduct);
$Product = mysqli_fetch_assoc($queryAllProduct);
?>