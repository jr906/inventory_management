<?php
include 'db.php';

if(ISSET($_GET['price'])){
    $id = $_GET['price'];

    $sql = "DELETE FROM product WHERE price=$price";

    if($connection->query($sql)==TRUE)
        {
            header("Location: student_list.php");
        }
}
?>