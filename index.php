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
        <a id="link-about" href="#about"><li>About</li></a>
        <a id="link-dev" href="#development"><li>Web Development</li></a>
        <a id="link-motion" href="#motion"><li>Motion Design</li></a>
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

<section id="motion">
<h1>Motion Design Projects</h1>
<div class="demo-reel">
    <div class="thumbnail demo-reel-thumb">
        <img data-target="demo-reel" src="public/images/demo-reel.jpg" alt="demo reel video">
    </div>
        <!-- <div class="lightbox">
            <video controls>
                <source src="public/videos/demo-reel.mp4" type="video/mp4">
                <source src="public/videos/demo-reel.ogg" type="video/ogg">
                <source src="public/videos/demo-reel.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div> -->
</div>
<div class="motion-projects">
    <div class="thumbnail lamps-thumb">
        <img data-target="lamps" src="public/images/lamps.jpg" alt="lamps video">
    </div>
        <!-- <div class="lightbox">
            <video controls>
                <source src="public/videos/lamps.mp4" type="video/mp4">
                <source src="public/videos/lamps.ogg" type="video/ogg">
                <source src="public/videos/lamps.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div> -->
    </div>
    <div class="thumbnail sportsnet-thumb">
        <img data-target="sportsnet" src="public/images/sportsnet.jpg" alt="sportsnet video">
    </div>
        <!-- <div class="lightbox">
            <video controls>
                <source src="public/videos/sportsnet.mp4" type="video/mp4">
                <source src="public/videos/sportsnet.ogg" type="video/ogg">
                <source src="public/videos/sportnet.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div> -->
    </div>
    <div class="thumbnail smart-thermostat-thumb">
        <img data-target="smart-thermostat" src="public/images/smart-thermostat.jpg" alt="smart thermostat video">
    </div>
        <!-- <div class="lightbox">
            <video controls>
                <source src="public/videos/smart-thermostat.mp4" type="video/mp4">
                <source src="public/videos/smart-thermostat.ogg" type="video/ogg">
                <source src="public/videos/smart-thermostat.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div> -->
    </div>
    <div class="thumbnail jet-engine-thumb">
        <img data-target="jet-engine" src="public/images/jet-engine.jpg" alt="jet-engine video">
    </div>
        <!-- <div class="lightbox">
            <video controls>
                <source src="public/videos/jet-engine.mp4" type="video/mp4">
                <source src="public/videos/jet-engine.ogg" type="video/ogg">
                <source src="public/videos/jet-engine.webm" type="video/webm">
                Sorry, your browser doesn't support embedded videos.
            </video> -->
    </div>
</div>
    
<div class="lightbox">
    <div class="close-lightbox">X</div>
    <div class="video">
        <video controls>
            <source src="" type="video/mp4">
            <!-- <source src="public/videos/sportsnet.ogg" type="video/ogg">
            <source src="public/videos/sportnet.webm" type="video/webm">
            Sorry, your browser doesn't support embedded videos. -->
        </video>
    </div>
</div>

</section>

<?php include 'contact.php';?>

<?php include 'footer.php';?>


