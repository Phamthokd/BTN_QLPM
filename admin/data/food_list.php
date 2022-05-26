<?php
include("../../configs/database.php");

$sql = "SELECT a.id as id, a.title as title, price, a.description as description,a.image_name as image_name, a.active as active, b.title as category_id, b.id as category FROM food a JOIN category b ON a.category_id = b.id";

$food_list = mysqli_query($conn, $sql);