<?php 
// debugger
ini_set('display_errors', 1);

header('Access-Control-Allow-Origin: *');

header('Content-Type: application/json; charset=UTF-8');

//include database and object files
include_once './config/database.php';
include_once './objects/project.php';

// instantiate database and project object
$database = new Database();
$db = $database->getConnection();
$project = new Project($db);

if(isset($_GET['id'])) {
    $stmt = $project->getProjectByID($_GET['id']);
}else{
    $stmt = $project->getProjects();
}

$num = $stmt->rowCount();

if($num>0){
    $results = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $single_project= $row;
        $results[] = $single_project;
    }
    // Pretty print increases size of files, use for debugging and turn off in production site
    echo json_encode($results, JSON_PRETTY_PRINT);
}else{
    echo json_encode(
        array(
            'message'=>'No Projects Found'
        )
    );
}
