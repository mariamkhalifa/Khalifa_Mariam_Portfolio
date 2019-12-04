<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <title>Mariam Khalifa</title>
</head>
<body>
<h1 class="hidden">Mariam Khalifa</h1>
<header id="main-header">
    <i class="fas fa-bars fa-2x"></i>
    <ul class="main-nav">
        <a id="link-dev" href="#development"><li>Web Development</li></a>
        <a id="link-motion" href="#design"><li>Motion Design</li></a>
        <a id="link-about" href="#about"><li>About</li></a>
        <a id="link-contact" href="#contact"><li>Contact</li></a>
    </ul>
    <a href="index.php" class="link-home">
        <picture class="logo">
            <source media="(min-width: 767px)" srcset="public/images/logo.svg">
            <img  src="public/images/logo-alt.svg" alt="logo">
        </picture>
    </a>
    <ul class="dots">
        <li class="dot">.</li>
        <li class="dot">.</li>
        <li class="dot">.</li>
    </ul>
    <i class="fas fa-chevron-down fa-2x"></i>
</header>

<section id="about">
<h1>A little bit about me..</h1>
<p class="about-text"><span>Hi there!</span><br>I’m a 2nd year interactive media design student at Fanshawe College, London, Ontario. I'm to graduate next April/2020.
I love to create and I love to tell stories that evoke powerful emotions. That’s why I chose this career.
My style is simplicity paired with functionality. When I’m not working, you’ll find me reading or playing with my 2 little boys.
</p>
<img class="about-img" src="public/images/mariam1.jpg" alt="mariam pic">
</section>
<div class="skills-con">
    <div class="skills skills-m">
        <h4>Motion Design Skills</h4>
        <ul>
            <li><i class="fas fa-square"></i>Cinema 4D</li>
            <li><i class="fas fa-square"></i>After Effects</li>
            <li><i class="fas fa-square"></i>Premiere</li>
        </ul>
    </div>
    <div class="skills skills-dev">
        <h4>Front-End Development Skills</h4>
        <ul>
            <li><i class="fas fa-square"></i>HTML5</li>
            <li><i class="fas fa-square"></i>CSS3</li>
            <li><i class="fas fa-square"></i>Vanilla JS</li>
            <li><i class="fas fa-square"></i>Node JS</li>
            <li><i class="fas fa-square"></i>Sass</li>
        </ul>
        <ul>
            <li><i class="fas fa-square"></i>Bootstrap</li>
            <li><i class="fas fa-square"></i>PHP</li>
            <li><i class="fas fa-square"></i>Python</li>
            <li><i class="fas fa-square"></i>MySQL</li>
        </ul>
    </div>
    <div class="skills skills-g">
        <h4>Graphic Design Skills</h4>
        <ul>
            <li><i class="fas fa-square"></i>Photoshop</li>
            <li><i class="fas fa-square"></i>Illustrator</li>
            <li><i class="fas fa-square"></i>XD</li>
            <li><i class="fas fa-square"></i>InDesign</li>
        </ul>
    </div>
</div>

<section id="development">
<h1>Web Development Projects</h1>
<div class="dev-projects">
    <a href="portfolio_project.php?id=1">
        <img class="project" data-target="1" src="public/images/animal-tracks-logo.png" alt="animal tracks logo">
    </a>
    <a href="portfolio_project.php?id=2">
        <img class="project" data-target="2" src="public/images/traa-logo.png" alt="traa logo">
    </a>
    <a href="portfolio_project.php?id=3">
    <img class="project" data-target="3" src="public/images/red-fox-logo.png" alt="red fox logo">
    </a>
    <a href="portfolio_project.php?id=4">
        <img class="project" data-target="4" src="public/images/imagina-logo.png" alt="imagina logo">
    </a>
</div>
<div class="dev-projects">
    <a href="portfolio_project.php?id=5">
        <img class="project" data-target="5" src="public/images/irobot-logo.png" alt="irobot logo">
    </a>
    <a href="portfolio_project.php?id=6">
        <img class="project" data-target="6" src="public/images/fav-things-logo.png" alt="favourite things logo">
    </a>
</div>
</section>

<?php include 'contact.php';?>

<?php include 'footer.php';?>


