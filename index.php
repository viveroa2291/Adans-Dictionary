<?php
$update = false;
session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'dictionary');
    $word = isset($_POST['word']) ? $_POST['word'] : '';
    $definition = isset($_POST['definition']) ? $_POST['definition'] : '';


    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $remove = "DELETE FROM Words WHERE id='$id'";
        $delete = mysqli_query($connect, $remove);
        /**
         * Leaves a message at the top that the term has been deleted.
         */
        $_SESSION['message'] = "Term has been deleted";
        $_SESSION['messageType'] = "danger";
    }
    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $word = $_POST['word'];
        $definition = $_POST['definition'];
        $result = mysqli_query($connect, "UPDATE Words SET word = '$word', definition = '$defintion' WHERE id='34'");
        
            $_SESSION['message'] = "Term has been edited";    
           // header("location: index.php");
    }
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
                    <!-- <a id="rko" onclick="showForms()">Touch me</a>  -->
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'dictionary'); 

                        $query = 'SELECT * FROM Words';
                        $result = mysqli_query($connect, $query);
                        $count = 0;
                            
                        for($i = 0; $i < mysqli_num_rows($result); $i++) {
                            $record = mysqli_fetch_assoc($result);
                            $word = $record['word'];
                            $definition = $record['definition']; // Might delete this line. 
                            $date = $record['date'];

                            echo '<div class="display-definition" id="display-definition display-definition'.$i.'">';
                                echo '<p class="word"><b>'.$i.'. '.$word.'</b></p>';

                                echo '<a href="index.php?id='.$record['id'].'" class="remove-button remove-button'.$i.'" id="remove-button'.$i.'">Remove</a>';
                                echo '<button class="edit-button" id="edit-forms" onclick="showForms('.$i.')">Edit</button>';
                                echo '<p class="definition">'.$definition.'</p>';

                                echo '<div class="date">'.'Date Added '.$date.'</div>';
                                // echo '<a href="index.php?edit='.$record['word'].'" class="save-button" id="save-button'.$i.'" onclick="hideForms('.$i.')">Save</a>';
                                echo '<form method="post">';                           
                                echo '<input class="enter-word" id="enter-word'.$i.'" type="text" name="word" value="'.$word.'"></input>'; // This is the input 
                                echo '<textarea class="enter-definition" name="definition" value="'.$definition.'" id="enter-definition'.$i.'" cols="50" rows="5" width="1%" maxlenght="1000">'.$definition.'</textarea>'; // This is the input
                                echo '<button type="submit" name="update" class="save-button" id="save-button'.$i.'" onclick="hideForms('.$i.')" >Save</button>';
                                echo '</form>';
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