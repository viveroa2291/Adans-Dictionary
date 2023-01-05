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
                    <!-- <a id="rko" onclick="showForms()">Touch me</a>  -->
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'dictionary'); 

                        $query = 'SELECT * FROM Words';
                        $result = mysqli_query($connect, $query);
                        $count = 0;
                            
                        for($i = 0; $i < mysqli_num_rows($result); $i++) {
                            $record = mysqli_fetch_assoc($result);
                            
                            echo '<div class="display-definition" id="display-definition display-definition'.$i.'">';
                            if($i == 5 ) {
                                echo '<h2>Hello World</h2>';
                            }
                             echo '<a id="rko" onclick="showForms('.$i.')">Touch me</a>';
                                echo '<p class="word"><b>'.$i.'. '.$record['word'].'</b></p>';
                               // echo '<p id="test" onclick="testing('.$i.');" >Eat Me</p>'; Testing
                                echo '<input class="enter-word" id="enter-word'.$i.'" type="text" name="word" value="'.$record['word'].'"></input>'; // This is the input 
                                echo '<a href="index.php?id='.$record['id'].'" class="remove-button remove-button'.$i.'" id="remove-button'.$i.'">Remove</a>';
                               // echo '<a href="index.php?id='.$record['id'].'" class="edit-button" id="edit-forms edit-forms'.$i.'" onclick="showForms('.$i.')">Edit</a>';
                                echo '<a class="edit-button" id="edit-forms" onclick="showForms('.$i.')">Edit</a>'; 
                                echo '<p class="definition">'.$record['definition'].'</p>';
                                echo '<textarea class="enter-definition" name="definition" id="enter-definition'.$i.'" cols="50" rows="5" width="1%" maxlenght="1000">'.$record['definition'].'</textarea>'; // This is the input
                                echo '<span class="date">'.'Date Added '.$record['date'].'</span>';
                                echo '<button class="save-button" id="save-button'.$i.'" onclick="hideForms('.$i.')">Save</button>';
                            echo '</div>'; 
                        }
                        
                        /*
                        for($j = $count; $j < mysqli_num_rows($result); $j++) {
                            
                        }
                        */
                        /*
                        while($record = mysqli_fetch_assoc($result)) 
                        {
                            echo '<div class="display-definition">';
                                echo '<p class="word"><b>'.$record['word'].'</b> </p>';
                                echo '<input class="enter-word" id="enter-word" type="text" name="word" value="'.$record['word'].'"></input>'; // This is the input 
                                echo '<a href="index.php?id='.$record['id'].'" class="remove-button">Remove</a>';
                                echo '<a href="index.php?id='.$record['id'].'" class="edit-button" id="edit-forms" onclick="showForms()">Edit</a>';
                                echo '<p class="definition">'.$record['definition'].'</p>';
                                echo '<textarea class="enter-definition" name="definition" id="enter-definition" cols="50" rows="5" width="1%" maxlenght="1000">'.$record['definition'].'</textarea>'; // This is the input
                                echo '<span class="date">'.'Date Added '.$record['date'].'</span>';
                                echo '<button class="save-button" id="save-button" onclick="hideForms()">Save</button>';
                            echo '</div>';
                        }
                        */
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