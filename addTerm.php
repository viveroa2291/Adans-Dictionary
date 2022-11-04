<?php
    include 'comment.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <?php
        include 'CSS/styles.css';
        include 'CSS/edit-terms.css';
    ?>
</style>
<?php
 include 'links.php';
 ?>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="left-details">
        <h4 class="helloWorld">Adan's Dictionary</h4>
        <hr>
        <form method="post">
            <?php
                echo "<label for='word' class='enter-term'>Enter Word: </label><b style='color: red;'>$word_error </b> <br>
                <input class='enter-word' type='text' name='word' value='$word'> <br>";
            ?>
            <label class='enter-definition' for="definition">Definition: </label> <?php echo '<b style="color: red;">'.$definition_error; echo '</b >' ?>
            <br>
            <div class="definition-text">
                <textarea class="definition" name="definition" id="text-area" cols="30" rows="2" width="1%" maxlenght="1000" <?php echo $definition; ?>></textarea>
                <span id="counter" class="counter"></span>
            </div>
            <input class="submit-button" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
<script>
    <?php
        include 'home.js';
    ?>
</script>
