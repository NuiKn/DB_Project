<?php
class statusController{

    public function index()
    {
        $statusList = statusModel::getAll();
        require_once("views/status/index_status.php");
    }
    public function newStatus()
    {
        $statuslist = statusModel::getAll();
        require_once('views/status/newStatus.php');
    }

    public function addStatus(){

        $ssID = $_GET['ssID'];
        $ssName = $_GET['ssName'];

        statusModel::add($ssID, $ssName);
        statusController::index();
        
    }

   public function updateForm(){
        $ssID = $_GET['ssID'];
        $status_list = statusModel::get($ssID);
        $statusList = statusModel::getAll();
        require_once("views/status/updateForm.php");
    }

    public function update(){
        $ssID = $_GET['ssID'];
        $ssName = $_GET['ssName'];
        statusModel::update($ssID, $ssName);
        statusController::index();
    }

    public function deleteConfirm(){
        $ssID = $_GET['ssID'];
        $status_list = statusModel::get($ssID);

        require_once("views/status/deleteConfirm.php");
    }

    public function delete(){
        $ssID = $_GET['ssID'];

        statusModel::delete($ssID);

        statusController::index();
    }
}
?>