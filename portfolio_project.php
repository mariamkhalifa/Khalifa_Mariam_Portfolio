<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <title>Portfolio Project\</title>
</head>
<body>
<h1 class="hidden">Portfolio Project/</h1>
<header id="project-header">
    <i class="fas fa-bars fa-2x"></i>
    <ul class="main-nav">
        <a id="link-dev" href="index.php#development"><li>Web Development</li></a>
        <a id="link-motion" href="index.php#design"><li>Motion Design</li></a>
        <a id="link-about" href="index.php#about"><li>About</li></a>
        <a id="link-contact" href="index.php#contact"><li>Contact</li></a>
    </ul>
    <a href="index.php" class="link-home">
        <picture class="logo">
            <source media="(min-width: 767px)" srcset="public/images/logo.svg">
            <img  src="public/images/logo-alt.svg" alt="logo">
        </picture>
    </a>
    <!-- <ul class="dots">
        <li class="dot">.</li>
        <li class="dot">.</li>
        <li class="dot">.</li>
    </ul> -->
    <!-- <i class="fas fa-chevron-down fa-2x"></i> -->
    <!-- <img class="hero" src="images/butterflies.png" alt="butterflies"> -->
</header>

<?php
//include database and object files
include_once './config/database.php';
include_once './objects/project.php';

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
        <h1 class="title"><?php echo $row['Name'];?></h1>
        <div class="dt-img-con">
            <img class="dt-img" src="public/images/<?php echo $row['main_image'];?>" alt="project desktop image">
        </div>
        <div class="desc">
            <h2>Project Description:</h2>
            <p class="project-desc"><?php echo $row['Description'];?></p>
            <h2>Team Members:</h2>
            <p class="project-team"><?php echo $row['Team Members'];?></p>
        </div>
        <div class="m-img">
            <img src="public/images/<?php echo $row['image_1'];?>" alt="project mobile image 1">
            <img src="public/images/<?php echo $row['image_2'];?>" alt="project mobile image 2">
        </div>
</div>
<?php endwhile;


    
else:?>
<h1>Uh Oh! Are you lost?</h1>
<div class="error-con"><a class="error-home" href="index.php">I'll help you find your way!</a></div>
<?php endif;?>

<img class="project-butterflies" src="public/images/butterflies.png" alt="butterflies">

<footer id="footer">
    <h1 class="hidden">Main Footer</h1>
    <p>&copy; Mariam Khalifa 2019.</p>
    <div class="social-media">
        <a href="https://github.com/mariamkhalifa" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        <a href="https://www.linkedin.com/in/mariamkhalifa/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        <a href="https://vimeo.com/mariamkhalifa" target="_blank"><i class="fab fa-vimeo fa-2x"></i></a>
    </div>
</footer>

<script src="public/js/project.js"></script>
<script src="public/js/nav.js"></script>
</body>
</html>