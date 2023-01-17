<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<style>
    <?php
        include 'CSS/styles.css';
        include 'CSS/about.css';
    ?>
</style>
<?php
    include 'links.php';
?>
<body>
    <?php
        include 'header.php';
    ?>
    <h2 class="about-header">About Page</h2>
    <hr class="about-hr">
    <section class="about-section">
        <div class="picture">
            <img src="images/dock.jpeg" alt="Picture of Adan">    
        </div>
        <div class="about-paragraph">
            <article id="about">
                <h2>About</h2>
                <hr>
                <p>This page was created by me (Adan Vivero) as a way of adding definitions to words I did not know. Everyday I would encounter words that I did not know the meaning or definition to and decided to make a website, something I enjoy doing and write down the definitions to the words.</p>
                <p>This site is currently in its beta form, but I plan to implement the search bar and categorize the definition by the fields in which they are attributed to.</p>
                <p>What I hope to accomplish with this website is opening up my vocabulary but also sharing these definitions with others as I believe we should all have a broader vocabulary to words. </p>
                <p>This website was created by using PHP, HTML, CSS, and Javascript. It is created by Adan Vivero only.</p>
            </article>
            <article id="about-me">
                <h2>About Me</h2>
                <hr>
                <p>I am a 25 year old with a bachelors degree in computer science from the University of Wisconsin of Eau Claire. I currently reside in Madison, Wisconsin, but was raised in Mount Prospect, Illinois, a northwest suburb of Chicago.</p>
                <p>I began programming back in high school starting off with IOS app development working with the languages Swift. I made few school projects at the time such as tic-tac-toe and a University match search engine.</p>
                <p>From there, I attended Harper College and took two programming classes where I learned the basic object oriented programming and worked with C++.</p>
                <p>After Harper College, I attended the University of Wisconsin - Eau Claire, where I began my computer science degree and learned databases, object oriented programming, algorithms, networks, cryptography, operating systems, and computer architectures. From there, I began working with programming languages such as Java, Javascript, C, Python, SQL, PHP, React.js, HTML, CSS, and Mips assembly language.</p>
            </article>
        </div>
    </section>
  
</body>
</html>