<?php
class columnController{

    public function index(){
        $columnList = columnModel::getAll();
        require_once("views/column/index_column.php");
    }
    public function newColumn(){
        $columnList = columnModel::getAll();
        require_once('views/column/newColumn.php');
    }

    public function addColumn(){
        $scID = $_GET['scID'];
        $scName = $_GET['scName'];
        columnModel::add($scID, $scName);
        columnController::index();
    }
   public function updateForm(){
        $scID = $_GET['scID'];
        $column_list = columnModel::get($scID);
        $columnList = columnModel::getAll();
        require_once("views/column/updateForm.php");
    }
    public function update(){
        $scID = $_GET['scID'];
        $scName = $_GET['scName'];
        columnModel::update($scID, $scName);
        columnController::index();
    }

    public function deleteConfirm(){
        $scID = $_GET['scID'];
        $column_list = columnModel::get($scID);
        require_once("views/column/deleteConfirm.php");
    }

    public function delete(){
        $scID = $_GET['scID'];
        columnModel::delete($scID);
        columnController::index();
    }

}
?>