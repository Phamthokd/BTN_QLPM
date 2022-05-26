<?php
include("../../configs/database.php");

$sql = "SELECT a.id,a.user_id,a.food_id,a.qty,a.total,a.oder_date,a.status,a.custormer_name,a.customer_contact,a.customer_address,b.title as food_title FROM `oder` as a, food  as b WHERE a.food_id = b.id and status = 0 or a.food_id = b.id and status = 1";

$order_list = mysqli_query($conn, $sql);