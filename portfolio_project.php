<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <title>Details\</title>
</head>
<body>
    




<h1>Portfolio Project</h1>

<?php
//include database and object files
include_once './config/database.php';
include_once './objects/project.php';

// instantiate database and project object
$database = new Database();
$db = $database->getConnection();
$movie = new Project($db);
if(isset($_GET['id'])) {
    $stmt = $project->getProjectByID($_GET['id']);
}

$num = $stmt->rowCount();

if($num>0):?>

    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
<div>
        <!-- <h2><?php echo $row['movies_title'];?></h2>
        <h4>Year: <?php echo $row['movies_year'];?></h4> -->
</div>
    <?php endwhile;


    
    else:?>
  <h1>No movie yet</h1>
    <?php endif;?>

    <?php include 'footer.php';?>