<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'template/head.php';?>
    <title>Mariam Khalifa</title>
</head>
<body>
<div id="app">
<h1 class="hidden">Mariam Khalifa</h1>

<?php include 'template/header.php';?>

<section id="about">
    <div class="about">
        <h2 class="main-heading">A little bit about me..</h2>
        <p class="about-text"><span>Hi there!</span><br>I’m a 2nd-year interactive media design student at Fanshawe College, London, Ontario, about to graduate next April/2020. I'm a front-end developer who is in love with Javascript. As an honour-roll student, I have proven time management skills and teamwork ethic. 
        Underneath my quiet nature is an adventurer, constantly seeking a new challenge. When I’m not working, you’ll find me reading or playing with my 2 little boys.</p>
        <img class="about-img" src="images/mariam1.jpg" alt="mariam pic">
    </div>
        
    <div class="skills-con">
        <div class="skills skills-m">
            <h3 class="skill-title">Motion Design Skills</h3>
            <ul class="ul-con">
                <li>Cinema 4D</li>
                <li>After Effects</li>
                <li>Premiere</li>
            </ul>
        </div>

        <div class="skills skills-dev">
            <h3 class="skill-title">Front-End Development Skills</h3>
            <ul class="ul-con">
                <li>HTML5</li>
                <li>CSS3</li>
                <li>Vanilla.js</li>
                <li>Node.js</li>
                <li>Vue.js</li>
                <li>AJAX</li>
            <!-- </ul>
            <ul> -->
                <li>Sass</li>
                <li>Bootstrap</li>
                <li>PHP</li>
                <li>Drupal</li>
                <li>Python</li>
                <li>MySQL</li>
                <li>Git</li>
            </ul>
        </div>

        <div class="skills skills-g">
            <h3 class="skill-title">Graphic Design Skills</h3>
            <ul class="ul-con">
                <li>Photoshop</li>
                <li>Illustrator</li>
                <li>XD</li>
                <li>InDesign</li>
            </ul>
        </div>
    </div>
</section>

<section id="development">
    <div class="development">
        <h2 class="main-heading">Web Development Projects</h2>

        <div class="dev-projects">
            <a class="project" href="roku.php">
                <img class="project-img" src="images/roku-mobile.png" alt="roku flashback project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Roku Flashback</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vue.js</li>
                            <li>Sass</li>
                            <li>Ajax</li>
                            <li>PHP</li>
                            <li>MySql</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a class="project" href="kin.php">
                <img class="project-img" src="images/kin-mobile.png" alt="keep it neutral project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Keep It Neutral</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vue.js</li>
                            <li>Sass</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a class="project" href="mmp.php">
                <img class="project-img" src="images/mmp-mobile.png" alt="MMP project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>M Media Player</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vue.js</li>
                            <li>Sass</li>
                            <li>Bootstrap</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a class="project" href="index.php?id=7">
                <img class="project-img" data-target="7" src="images/ON-summer-mobile.png" alt="Ontario summer project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Ontario Summer</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vue.js</li>
                            <li>Sass</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a class="project red-fox" href="index.php?id=3">
                <img class="project-img" data-target="3" src="images/red-fox-mobile.png" alt="red fox project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Red Fox</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vanilla.js</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a data-target="5" ref="project" class="project" href="index.php?id=5">
                <img class="project-img" src="images/irobot-mobile.png" alt="irobot project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Roomba Robot Vaccuum</h3>
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

            <a class="project" href="index.php?id=4">
                <img class="project-img" data-target="4" src="images/imagina-mobile.png" alt="imagina project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Imagina</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vanilla.js</li>
                            <li>Sass</li>
                        </ul>
                    </div>
                </div>
            </a>
        
            <a class="project" href="index.php?id=6">
                <img class="project-img" data-target="6" src="images/fav-things-mobile.png" alt="favourite things project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>Favourite Things</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Node.js</li>
                            <li>Ajax</li>
                        </ul>
                    </div>
                </div>
            </a>

            <a class="project" href="index.php?id=2">
                <img class="project-img" data-target="2" src="images/traa-mobile.png" alt="traa project">
                <div class="dev-popover-outer">
                    <div class="dev-popover-inner">
                        <h3>TRAA</h3>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Vanilla.js</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>

        <a class="project animal-tracks" href="index.php?id=1">
            <img data-target="1" src="images/animal-tracks-desktop.png" alt="animal tracks project">
            <div class="dev-popover-outer">
                <div class="dev-popover-inner">
                    <h3>Animal Tracks</h3>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Vanilla.js</li>
                    </ul>
                </div>
            </div>
        </a>
    </div>
</section>

<section id="motion">
<h2 class="main-heading">Motion Design Projects</h2>
<div class="motion-projects">
    <div class="thumbnail" data-target="demo-reel">
        <h2 class="thumb-title">Demo Reel 2019</h2>
        <img class="thumb-img" src="images/demo-reel.jpg" alt="demo reel video">
    </div>
    <div class="thumbnail" data-target="lamps">
        <h2 class="thumb-title">Lamps Advertisement</h2>
        <img class="thumb-img" src="images/lamps.jpg" alt="lamps video">
    </div>
    <div class="thumbnail" data-target="sportsnet">
        <h2 class="thumb-title">Sportsnet Promo</h2>
        <img class="thumb-img" src="images/sportsnet.jpg" alt="sportsnet video">
    </div>
    <div class="thumbnail" data-target="smart-thermostat">
        <h2 class="thumb-title">Smart Thermostat 3D Model</h2>
        <img class="thumb-img" src="images/smart-thermostat.jpg" alt="smart thermostat video">
    </div>
    <div class="thumbnail" data-target="jet-engine">
        <h2 class="thumb-title">Jet Engine 3D Model</h2>
        <img class="thumb-img" src="images/jet-engine.jpg" alt="jet-engine video">
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
        <label for="u-name">Name:</label>
        <input id="u-name" type="text" name="name" placeholder="e.g. Harry Potter" required>

        <label for="u-email">Email:</label>
        <input id="u-email" type="email" name="email" placeholder="e.g. harry@hogwarts.edu" required>

        <label for="u-subject">Subject:</label>
        <input id="u-subject" type="text" name="subject" placeholder="e.g. Spells" required>

        <label for="u-message">Message:</label>
        <textarea id="u-message" name="message" Placeholder="I'd like to say..." rows="11" required></textarea>

        <button class="submit-btn" type="submit">Submit</button>
    </form>
    
</section>

<section class="dev-lightbox">
    <a href="index.php"><img class="dev-logo" src="images/logo-symbol.svg" alt="logo"></a>
    <p class="close-dev-lightbox">X</p>
    <?php
    //include database and object files
    include_once 'includes/config/database.php';
    include_once 'includes/objects/project.php';

    // instantiate database and project object
    $database = new Database();
    $db = $database->getConnection();
    $project = new Project($db);
    $stmt = $project->getProjects();

    if(isset($_GET['id'])) {
        $stmt = $project->getProjectByID($_GET['id']);
    }

    $num = $stmt->rowCount();

    if($num>0):?>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <div class="project-con">
                <h3 class="title"><?php echo $row['Name'];?></h3>
                <div class="dt-img-con">
                    <img class="dt-img" src="images/<?php echo $row['main_image'];?>" alt="project desktop image">
                </div>
                <div class="desc">
                    <h4>Project Description:</h4>
                    <p class="project-desc"><?php echo $row['Description'];?></p>
                    <h4>Team Members:</h4>
                    <p class="project-team"><?php echo $row['Team Members'];?></p>
                </div>
                <div class="m-img">
                    <img src="images/<?php echo $row['image_1'];?>" alt="project mobile image 1">
                    <img src="images/<?php echo $row['image_2'];?>" alt="project mobile image 2">
                </div>
        </div>
        <?php endwhile;

        else:?>
            <h1>Uh Oh! Are you lost?</h1>
            <div class="error-con"><a class="error-home" href="index.php">I'll help you find your way!</a></div>
        <?php endif;?>

</section>

<?php include 'template/footer.php';?>
</div>

<script src="js/nav.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/aboutImg.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/project.js"></script>
<script src="js/scrollTop.js"></script>

</body>
</html>
