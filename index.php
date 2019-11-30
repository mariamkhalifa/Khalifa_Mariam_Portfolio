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
    <!-- <img class="hero" src="images/butterflies.png" alt="butterflies"> -->
</header>

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


<?php include 'footer.php';?>


