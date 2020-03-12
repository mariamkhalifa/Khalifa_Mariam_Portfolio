<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php';?>
    <title>Mariam Khalifa</title>
</head>
<body>
<h1 class="hidden">Mariam Khalifa</h1>
<header id="main-header">
    <i class="fas fa-bars fa-2x"></i>
    <ul class="main-nav">
        <a id="link-about" href="#about"><li>About</li></a>
        <a id="link-dev" href="#development"><li>Web Development</li></a>
        <a id="link-motion" href="#motion"><li>Motion Design</li></a>
        <a id="link-contact" href="#contact"><li>Contact</li></a>
    </ul>
    <a href="index.php" class="link-home">
        <picture class="logo">
            <source media="(min-width: 767px)" srcset="images/logo.svg">
            <img  src="images/logo-alt.svg" alt="logo">
        </picture>
    </a>
    <div class="welcome">
        <h1>Hello,</h1>
        <h2>I'm a front-end developer</h2>
        <h2>This is my portfolio.</h2>
    </div>
    <ul class="dots">
        <li class="dot">.</li>
        <li class="dot">.</li>
        <li class="dot">.</li>
    </ul>
    <i class="fas fa-chevron-down fa-2x"></i>
</header>

<section id="about">
<h1>A little bit about me..</h1>
<p class="about-text"><span>Hi there!</span><br>I’m a 2nd year interactive media design student at Fanshawe College, London, Ontario. I'm to graduate next April/2020. I'm a front-end developer who is in love with Javascript.
I love to create and I love to tell stories that evoke powerful emotions.
My style is simplicity paired with functionality. When I’m not working, you’ll find me reading or playing with my 2 little boys.
</p>
<img class="about-img" src="images/mariam1.jpg" alt="mariam pic">
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
            <li><i class="fas fa-square"></i>Vue JS</li>
        </ul>
        <ul>
            <li><i class="fas fa-square"></i>Sass</li>
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
    <a href="portfolio_project.php?id=7">
        <img class="project" data-target="7" src="images/ON-summer-mobile.png" alt="animal tracks project">
    </a>
    <a href="portfolio_project.php?id=3">
    <img class="project" data-target="3" src="images/red-fox-mobile.png" alt="red fox project">
    </a>
    <a href="portfolio_project.php?id=2">
        <img class="project" data-target="2" src="images/traa-mobile.png" alt="traa project">
    </a>
    <a href="portfolio_project.php?id=4">
        <img class="project" data-target="4" src="images/imagina-mobile.png" alt="imagina project">
    </a>
<!-- </div>
<div class="dev-projects"> -->
    <a href="portfolio_project.php?id=5">
        <img class="project" data-target="5" src="images/irobot-mobile.png" alt="irobot project">
    </a>
    <a href="portfolio_project.php?id=6">
        <img class="project" data-target="6" src="images/fav-things-mobile.png" alt="favourite things project">
    </a>
</div>
<a class="music-mixer-project" href="portfolio_project.php?id=1">
    <img class="project" data-target="1" src="images/animal-tracks-desktop.png" alt="animal tracks project">
</a>
</section>

<section id="motion">
<h1>Motion Design Projects</h1>
<div class="demo-reel">
    <div class="thumbnail" data-target="demo-reel">
        <h2 class="thumb-title">Demo Reel 2019</h2>
        <img src="images/demo-reel.jpg" alt="demo reel video">
    </div>
</div>
<div class="motion-projects">
    <div class="thumbnail" data-target="lamps">
        <h2 class="thumb-title">Lamps Advertisement</h2>
        <img src="images/lamps.jpg" alt="lamps video">
    </div>
    <div class="thumbnail" data-target="sportsnet">
        <h2 class="thumb-title">Sportsnet Promo</h2>
        <img src="images/sportsnet.jpg" alt="sportsnet video">
    </div>
    <div class="thumbnail" data-target="smart-thermostat">
        <h2 class="thumb-title">Smart Thermostat 3D Model</h2>
        <img src="images/smart-thermostat.jpg" alt="smart thermostat video">
    </div>
    <div class="thumbnail" data-target="jet-engine">
        <h2 class="thumb-title">Jet Engine 3D Model</h2>
        <img src="images/jet-engine.jpg" alt="jet-engine video">
    </div>
</div>
</div>
</section>

<div class="lightbox">
    <div class="close-lightbox">X</div>
        <div class="video-con">
            <h2 class="video-title">Demo Reel 2019</h2>
            <p class="video-text">Created with Cinema 4D and After Effects.</p>
            <video class="video" controls>
                <source src="videos/demo-reel.mp4" type="video/mp4">
                <!-- <source src="videos/sportsnet.ogg" type="video/ogg">
                <source src="videos/sportnet.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos. -->
            </video>
        </div>
</div>

<?php include 'template/contact.php';?>

<?php include 'template/footer.php';?>


