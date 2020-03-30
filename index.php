<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php';?>
    <title>Mariam Khalifa</title>
</head>
<body>
<h1 class="hidden">Mariam Khalifa</h1>
<header id="main-header">
    <h2 class="hidden">Main header</h2>
    <i class="fas fa-bars fa-2x"></i>
    <ul class="main-nav">
        <li class="link"><a id="link-about"  href="#about">About</a></li>
        <li class="link"><a id="link-dev"  href="#development">Web Development</a></li>
        <li class="link"><a id="link-motion"  href="#motion">Motion Design</a></li>
        <li class="link"><a id="link-contact"  href="#contact">Contact</a></li>
    </ul>
    <a href="index.php" class="link-home">
        <picture class="logo">
            <source media="(min-width: 767px)" srcset="images/logo.svg">
            <img  src="images/logo-alt.svg" alt="logo">
        </picture>
    </a>
    <p class="welcome">
        <span class="large">Hello,</span>
        <span class="small">I'm a front-end developer</span>
        <span class="small">This is my portfolio.</span>
    </p>
    <ul class="dots">
        <li class="dot">.</li>
        <li class="dot">.</li>
        <li class="dot">.</li>
    </ul>
    <i class="fas fa-chevron-down fa-2x"></i>
</header>

<section id="about">
<h2 class="main-heading">A little bit about me..</h2>
<p class="about-text"><span>Hi there!</span><br>I’m a 2nd-year interactive media design student at Fanshawe College, London, Ontario, about to graduate next April/2020. I'm a front-end developer who is in love with Javascript. As an honour-roll student, I have proven time management skills and teamwork ethic. 
Underneath my quiet nature is an adventurer, constantly seeking a new challenge. When I’m not working, you’ll find me reading or playing with my 2 little boys.</p>
<img class="about-img" src="images/mariam1.jpg" alt="mariam pic">
</section>
<div class="skills-con">
    <div class="skills skills-m">
        <h3 class="skill-title">Motion Design Skills</h3>
        <ul>
            <li><i class="fas fa-square"></i>Cinema 4D</li>
            <li><i class="fas fa-square"></i>After Effects</li>
            <li><i class="fas fa-square"></i>Premiere</li>
        </ul>
    </div>
    <div class="skills skills-dev">
        <h3 class="skill-title">Front-End Development Skills</h3>
        <ul>
            <li><i class="fas fa-square"></i>HTML5</li>
            <li><i class="fas fa-square"></i>CSS3</li>
            <li><i class="fas fa-square"></i>Vanilla.js</li>
            <li><i class="fas fa-square"></i>Node.js</li>
            <li><i class="fas fa-square"></i>Vue.js</li>
            <li><i class="fas fa-square"></i>AJAX</li>
        <!-- </ul>
        <ul> -->
            <li><i class="fas fa-square"></i>Sass</li>
            <li><i class="fas fa-square"></i>Bootstrap</li>
            <li><i class="fas fa-square"></i>PHP</li>
            <li><i class="fas fa-square"></i>Drupal</li>
            <li><i class="fas fa-square"></i>Python</li>
            <li><i class="fas fa-square"></i>MySQL</li>
            <li><i class="fas fa-square"></i>Git</li>
        </ul>
    </div>
    <div class="skills skills-g">
        <h3 class="skill-title">Graphic Design Skills</h3>
        <ul>
            <li><i class="fas fa-square"></i>Photoshop</li>
            <li><i class="fas fa-square"></i>Illustrator</li>
            <li><i class="fas fa-square"></i>XD</li>
            <li><i class="fas fa-square"></i>InDesign</li>
        </ul>
    </div>
</div>

<section id="development">
<h2 class="main-heading">Web Development Projects</h2>
<div class="dev-projects">
    <a href="portfolio_project.php?id=7">
        <img class="project" data-target="7" src="images/ON-summer-mobile.png" alt="Ontario summer project">
        <div class="dev-popover-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">Ontario Summer</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Vue.js</li>
                    <li>Sass</li>
                </ul>
            </div>
        </div>
    </a>
    <a href="portfolio_project.php?id=3">
        <img class="project" data-target="3" src="images/red-fox-mobile.png" alt="red fox project">
        <div class="dev-overlay-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">Red Fox</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Vanilla.js</li>
                    <li>PHP</li>
                </ul>
            </div>
        </div>
    </a>
    <a href="portfolio_project.php?id=5">
        <img class="project" data-target="5" src="images/irobot-mobile.png" alt="irobot project">
        <div class="dev-overlay-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">Roomba Robot Vaccuum</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Node.js</li>
                    <li>Bootstrap</li>
                    <li>Heroku</li>
                </ul>
            </div>
        </div>
    </a>
    <a href="portfolio_project.php?id=4">
        <img class="project" data-target="4" src="images/imagina-mobile.png" alt="imagina project">
        <div class="dev-overlay-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">Imagina</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Vanilla.js</li>
                    <li>Sass</li>
                </ul>
            </div>
        </div>
    </a>
<!-- </div>
<div class="dev-projects"> -->
    <a href="portfolio_project.php?id=6">
        <img class="project" data-target="6" src="images/fav-things-mobile.png" alt="favourite things project">
        <div class="dev-overlay-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">Favourite Things</h4>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Node.js</li>
                    <li>Ajax</li>
                </ul>
            </div>
        </div>
    </a>
    <a href="portfolio_project.php?id=2">
        <img class="project" data-target="2" src="images/traa-mobile.png" alt="traa project">
        <div class="dev-overlay-outer">
            <div class="dev-popover-inner">
                <h4 class="project-title">TRAA</h4>
                <p>HTML5<br>CSS3<br>Vanilla.js</p>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Vanilla.js</li>
                </ul>
            </div>
        </div>
    </a>
</div>
<a class="project animal-tracks" href="portfolio_project.php?id=1">
    <img data-target="1" src="images/animal-tracks-desktop.png" alt="animal tracks project">
    <div class="dev-overlay-outer">
        <div class="dev-popover-inner">
            <h4 class="project-title">Animal Tracks</h4>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Vanilla.js</li>
            </ul>
        </div>
    </div>
</a>
</section>

<section id="motion">
<h2 class="main-heading">Motion Design Projects</h2>
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

<section id="contact">
    <h2 class="main-heading">Let's create together..</h2>
    <p>You can use this contact form to get in touch. I'll get back to you within 2 business days. 
    <br>Unless, of course, I am unable to do so!</p>
    <form id="form" action="includes/contact/data_contact.php" method="post">
        <label for="u-name"></label>
        <input id="u-name" type="text" name="name" placeholder="Name: Harry Potter" required>

        <label for="u-email"></label>
        <input id="u-email" type="email" name="email" placeholder="Email: harry@hogwarts.edu" required>

        <label for="u-subject"></label>
        <input id="u-subject" type="text" name="subject" placeholder="Subject.." required>

        <label for="u-message"></label>
        <textarea id="u-message" name="message" Placeholder="Message.." rows="11" required></textarea>

        <button class="submit-btn" type="submit">Submit</button>
    </form>
    
</section>

<?php include 'template/footer.php';?>


