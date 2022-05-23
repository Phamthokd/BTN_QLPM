<?php
include("../../configs/database.php");

$sql = "SELECT * from admin";

$admin_list = mysqli_query($conn, $sql);