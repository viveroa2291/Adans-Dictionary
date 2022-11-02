<?php 
session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'dictionary');

        $word = isset($_POST['word']) ? $_POST['word'] : '';
        $definition = isset($_POST['definition']) ? $_POST['definition'] : ''; 

        $word_error = '';
        $definition_error = '';

        if (count($_POST)) {
            $errors = 0;

            if($word == '')
            {
                $errors ++;
                $word_error = 'Please enter a word';
            }
            if($definition == '')
            {
                $errors ++;
                $definition_error = 'Please enter a definition';
            }
            if($errors == 0)
            {
                $query = 'INSERT INTO Words (word, definition) VALUES ("'.addslashes($word).'", "'.addslashes($definition).'")';

                $message = 'You have received a new comment on your home page: 
                Word: '.$word.'
                Definition: '.$definition;
                
                mail('adxadan@gmail.com', 'Comment submitted', $definition);
                    
                mysqli_query($connect, $query);
                header('Location: index.php');
                die();
            }
        }
?>