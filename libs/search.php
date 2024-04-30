<?php
include('DBConnect.php');
if (isset($_GET['find'])){
    $key = $_GET ['search'];
    $sql_search = "SELECT * FROM `product` WHERE `name` LIKE '%" . $key . "%'";
    $query_search= mysqli_query($conn,$sql_search);
}
else{
    $key ='';
    $sql_search = "SELECT * FROM `product` limit 7";
    $query_search = mysqli_query($conn, $sql_search);
}
?>


