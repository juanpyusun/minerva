<?php
    include_once('database.php');

    if(isset($_GET['id'])){
        $id     = $_GET['id'];
        $query  = "DELETE FROM user WHERE id=$id";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message']      = "User Removed Successfully";
        $_SESSION['message_type'] = "danger";
        header("Location: index.php");
    }
?>