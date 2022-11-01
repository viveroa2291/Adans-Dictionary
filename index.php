<?php
    include 'comment.php';
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
                <div class="left-details">
                    <h4 class="helloWorld">Enter Word</h4>
                    <hr>
                    <form method="post">
                    <?php
                        echo "<label for='word'>Enter Word: </label><b style='color: red;'>$word_error </b> <br>
                        <input class='enter-word' type='text' name='word' value='$word'> <br>";
                    ?>
                    <label for="definition">Definition: </label> <?php echo '<b style="color: red;">'.$definition_error; echo '</b >' ?>
                    <br>
                    <textarea class="definition" name="definition" id="" cols="25" rows="1" width="1%" <?php echo $definition; ?>></textarea>
                    <br>
                    <input class="submit-button" type="submit" value="Submit">
                    </form>
                </div>
                <div class="right-details">
                    <h3 class="timeline">Vocabulary</h3>
                    <hr>
                    
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'dictionary'); 

                        $query = 'SELECT word, definition, date FROM Words';
                        $result = mysqli_query($connect, $query);

                        while($record = mysqli_fetch_assoc($result )) 
                        {
                            echo '<div class="display-definition">';
                            echo '<p class="word"><b>'.$record['word'].'</b><span class="date">'.$record['date'].'</span></p>';
                            echo '<p class="definition">'.$record['definition'].'</p>';
                            echo '</div>';
                        }
                    ?>
                </div>
         </section>
</body>
</html>