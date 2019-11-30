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
        <a href="#development"><li>Web Development</li></a>
        <a href="#design"><li>Motion Design</li></a>
        <a href="#about"><li>About</li></a>
        <a href="#contact"><li>Contact</li></a>
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

<?php
//include database and object files
// include_once './config/database.php';
// include_once './objects/project.php';

// // instantiate database and movie object
// $database = new Database();
// $db = $database->getConnection();
// $project = new Project($db);
// $stmt = $project->getProjects();


// $num = $stmt->rowCount();

// if($num>0):?>

    <?php //while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
<!-- <div>
        <h2><?php //echo $row['Name'];?></h2>
        <img src="<?php //echo $row['main_image'];?>" alt="project image"> 
        <a href="portfolio_project.php?id=<?php //echo $row['ID'];?>">Detail</a>
</div> -->
    <?php //endwhile;


    
    //else:?>
  <!-- <h1>No Project</h1> -->
    <?php //endif;?>

<section id="development">
<h1>Web Development Projects</h1>
<div class="dev-projects">
    <img class="project" src="public/images/animal-tracks-logo.png" alt="animal tracks">
    <img class="project" src="public/images/traa-logo.png" alt="animal tracks">
    <img class="project" src="public/images/red-fox-logo.png" alt="animal tracks">
    <img class="project" src="public/images/imagina-logo.png" alt="animal tracks">
</div>
<div class="dev-projects">
    <img class="project" src="public/images/irobot-logo.png" alt="animal tracks">
    <img class="project" src="public/images/fav-things-logo.png" alt="animal tracks">
</div>
</section>


<?php include 'footer.php';?>


