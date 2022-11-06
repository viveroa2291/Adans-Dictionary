<?php
session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'dictionary');
    /*
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $remove = "DELETE FROM Words WHERE id='$id'";
        $delete = mysqli_query($connect, $remove);
        /**
         * Leaves a message at the top that the term has been deleted.
         
        $_SESSION['message'] = "Term has been deleted";
        $_SESSION['messageType'] = "danger";
    }
    if(isset($_GET['edit'])) {
        $id = $_GET['id'];
        $result = mysqli_query($connect, "SELECT * FROM Words WHERE='$id'");

            if(count($result)==1) {
                $row = mysqli_fetch_array($result);
                $term = $record['word'];
                $definition = $record['definition'];
            }
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    <?php
        include 'CSS/styles.css';
        include 'CSS/home.css';
    ?>
</style>
<?php
 include 'links.php';
 ?>
<body>
    <?php
        include 'header.php';
    ?>
     <section class="word-section">
        <?php

            if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['messageType']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
            </div>
            <?php endif ?>
                <div class="right-details">
                    <h3 class="vocabulary">Adan's Vocabulary</h3>
                    <hr>
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'dictionary'); 

                        $query = 'SELECT * FROM Words';
                        $result = mysqli_query($connect, $query);

                        while($record = mysqli_fetch_assoc($result)) 
                        {
                            echo '<div class="display-definition">';
                                echo '<p class="word"><b>'.$record['word'].'</b>
                                        <a href="index.php?id='.$record['id'].'" class="remove-button">Remove</a>
                                        <a href="index.php?id='.$record['id'].'" class="edit-button" onclick="showForms()">Edit</a>
                                    </p>';
                                echo '<p class="definition">'.$record['definition'].'
                                        <span class="date">'.'Date Added '.$record['date'].'</span>
                                    </p>';
                            echo '</div>';
                        }
                    ?>
                </div>                        
                <form class="edit-forms" id="edit-forms" action="index.php" method="POST">
                    <label class="word-label" for="">Word</label>
                    <input id="edit-word" type="text" name="word" class="form-control edit-word" value="<?php ?>">
                    <label class="definition-label" for="">Definition</label>
                    <input type="text" name="definition" class="form-control edit-definition">
                </form>                
                
                <a href="addTerm.php" class="addTerm">Add Term</a>
         </section>
</body>
</html>
<script>
    <?php
        include 'home.js';
    ?>
</script>