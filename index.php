<?php
    $connect = mysqli_connect('localhost', 'root', '', 'dictionary');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $remove = "DELETE FROM Words WHERE id='$id'";
        $delete = mysqli_query($connect, $remove);
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
                                        <button class="edit-button" name="edit-button">Edit</button>
                                    </p>';
                                echo '<p class="definition">'.$record['definition'].'
                                        <span class="date">'.'Date Added '.$record['date'].'</span>
                                    </p>';
                            echo '</div>';
                        }
                    ?>
                </div>
         </section>
</body>
</html>