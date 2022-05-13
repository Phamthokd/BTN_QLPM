<?php
include("../../configs/database.php");

$sql = "
        SELECT *
        FROM food
    ";

$food_list = mysqli_query($conn, $sql);