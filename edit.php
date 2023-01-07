<?php
$update = false;
session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'dictionary');
    $definition = isset($_POST['definition']) ? $_POST['definition'] : '';

if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $word = $_POST['word'];
        $definition = $_POST['definition'];

        $result = mysqli_query($connect, "UPDATE Words SET word = '$word', definition = '$defintion' WHERE id='$id'");
        
            $_SESSION['message'] = "Term has been edited";    
            header("location: index.php");

    }

?>