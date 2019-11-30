<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <title>Projects\</title>
</head>
<body>
<h1 class="invisible">Portfolio Project</h1>

<?php
//include database and object files
include_once './config/database.php';
include_once './objects/project.php';

// instantiate database and movie object
// vars found in config/database.php
$database = new Database();
$db = $database->getConnection();
// var found in objects/movie.php
$project = new Project($db);
if(isset($_GET['id'])) {
    $stmt = $project->getProjectByID($_GET['id']);
}

$num = $stmt->rowCount();

if($num>0):?>

    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
<div>
        <h2><?php echo $row['Name'];?></h2>
        <img src="<?php echo $row['main_image'];?>" alt="project image">
</div>
    <?php endwhile;


    
    else:?>
  <h1>No Project!</h1>
    <?php endif;?>

    <?php include 'footer.php';?>