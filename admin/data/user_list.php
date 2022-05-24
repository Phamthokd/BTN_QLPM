<?php
include("../../configs/database.php");

$sql = "SELECT * from user";

$user_list = mysqli_query($conn, $sql);