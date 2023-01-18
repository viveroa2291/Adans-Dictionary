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
        <div class="about-image">
            <div class="picture">
                <img src="images/dock.jpeg" alt="Picture of Adan">    
            </div>
            <div class="about-me">
                <article id="about-me">
                    <h2>About Me</h2>
                    <hr>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; I am a 25 year old with a Bachelors degree in Computer Science from the <a href="https://www.uwec.edu/">University of Wisconsin Eau Claire</a>. I currently reside in Madison, Wisconsin, but was raised in Mount Prospect, Illinois, a northwest suburb of Chicago.</p>
                    <p>Growing up, I participated in soccer, wrestling, and gymnastics. My hobbies now include going to the gym, programming, going on hikes, playing video games.</p>
                    <p>Aside from programming, I like to go for photo shoots and take pictures of nature and cities. I also enjoy video editing and have plans to upload content on <a href="https://rumble.com/user/adxadan">Rumble</a>.</p>
                    <h4>Computer Science Background</h4>
                    <hr>
                    <p>&ensp;&ensp;&nbsp;&nbsp; I began programming back in high school starting off with IOS app development working with the languages Swift. I made few school projects at the time such as tic-tac-toe and a University match search engine.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; From there, I attended <a href="https://www.harpercollege.edu/index.php">Harper College</a> and took two programming classes where I learned the basic object oriented programming and worked with C++.</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; After Harper College, I attended the <a href="https://www.uwec.edu/">University of Wisconsin - Eau Claire</a>, where I began my computer science degree and learned 
                    <ul>
                        <li>Databases</li>
                        <li>Object Oriented Programming (OOP)</li>
                        <li>Algorithms</li>
                        <li>Computer Networks</li>
                        <li>Cryptography & Network Security</li>
                        <li>Operating Systems</li>
                        <li>Computer Architectures</li>
                    </ul>
                    From there, I began working with programming languages such as Java, Javascript, C, Python, SQL, PHP, React.js, HTML, CSS, and Mips assembly language.</p>
                </article>
            </div>
        </div>
        <div class="about-paragraph">
            <article id="about">
                <h2>About Adan's Dictionary</h2>
                <hr>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; This page was created by me (Adan Vivero) as a way of adding definitions to words I did not know. Everyday I would encounter words that I did not know the meaning or definition to and decided to make a website, something I enjoy doing and write down the definitions to the words.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; This site is currently in its beta form, but I plan to implement the search bar and categorize the definition by the fields in which they are attributed to.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp; What I hope to accomplish with this website is opening up my vocabulary but also sharing these definitions with others as I believe we should all have a broader vocabulary to words. </p>
                <p>This website was created by using 
                    <ul>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Javascript</li>
                    </ul>
                    It is created by Adan Vivero only.</p>
            </article>
        </div>
    </section>
  
</body>
</html>