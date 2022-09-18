<?php
    $conn = new mysqli('localhost', 'root', '', 'contact');
    if(!$conn) {
        die("Conn failed");
    }
?>