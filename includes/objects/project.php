<?php
class Project{
    private $conn;

    public $projects_table = 'tbl_projects';

    public function __construct($db){
        $this->conn = $db;
    }

    public function getProjectByID($id){
        // echo $id;
        // exit;

        $query = 'SELECT * FROM `tbl_projects` WHERE `ID` =' . $id;

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        
        //$result = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result = $row;
        }
        return $result;
    }

    public function getProjects(){
        $query = 'SELECT * FROM tbl_projects';

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}