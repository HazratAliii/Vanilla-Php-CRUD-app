<?php
    include("connect.php");
    if(isset($_GET['id'])) {
        $del = $_GET['id'];
        $sql = "delete from `contacts` where id = $del";
        $result = mysqli_query($conn, $sql);
        header("Location: data.php");
    } else {
        die("Connection failed");
    }
?>