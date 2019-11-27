<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <title>Document</title>
</head>
<body>
    




<h1>Mariam Khalifa</h1>

<?php
//include database and object files
include_once './config/database.php';
include_once './objects/project.php';

// instantiate database and movie object
$database = new Database();
$db = $database->getConnection();
$project = new Project($db);
$stmt = $project->getProjects();


$num = $stmt->rowCount();

if($num>0):?>

    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
<div>
        <h2><?php echo $row['Name'];?></h2>
        <img src="<?php echo $row['main_image'];?>" alt="project image"> 
        <a href="portfolio_project.php?id=<?php echo $row['ID'];?>">Detail</a>
</div>
    <?php endwhile;


    
    else:?>
  <h1>No Project</h1>
    <?php endif;?>

    <?php include 'footer.php';?>