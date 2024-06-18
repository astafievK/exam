<?php

require ('connection.php');

$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$status = isset($_GET['status']) ? $conn->real_escape_string($_GET['status']) : 'all';

$sql = "select * from ticket where 1=1 and status = '$status'";

if(!empty($string)){
    $sql .= " AND (request_title LIKE '%$search%' OR request_description LIKE '%$search%')";
}