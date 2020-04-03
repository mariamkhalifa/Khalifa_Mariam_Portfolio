<?php
    //include database and object files
    include_once 'config/database.php';
    include_once 'objects/project.php';

    // instantiate database and project object
    $database = new Database();
    $db = $database->getConnection();
    $project = new Project($db);
    $stmt = $project->getProjects();

    if(isset($_GET['id'])) {
        $stmt = $project->getProjectByID($_GET['id']);
        echo json_encode($stmt);
    }