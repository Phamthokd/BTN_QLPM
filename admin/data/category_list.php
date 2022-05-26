<?php
include("../../configs/database.php");

$sql = "SELECT * FROM category";

$category_list = mysqli_query($conn, $sql);