<?php
class replaceNameController{

    public function index(){
        $replaceNameList = replaceNameModel::getAll();
        require_once("views/replace/index_replace.php");
    }
    public function newReplace(){
        $replaceNameList = replaceNameModel::getAll();
        require_once('views/replace/newReplace.php');
    }

    public function addReplace(){
        $srID = $_GET['srID'];
        $srName = $_GET['srName'];
        replaceNameModel::add($srID, $srName);
        replaceNameController::index();
    }
   public function updateForm(){
        $srID = $_GET['srID'];
        $replaceName_list = replaceNameModel::get($srID);
        $replaceNameList = replaceNameModel::getAll();
        require_once("views/replace/updateForm.php");
    }
    public function update(){
        $srID = $_GET['srID'];
        $srName = $_GET['srName'];
        replaceNameModel::update($srID, $srName);
        replaceNameController::index();
    }

    public function deleteConfirm(){
        $srID = $_GET['srID'];
        $replaceName_list = replaceNameModel::get($srID);
        require_once("views/replace/deleteConfirm.php");
    }

    public function delete(){
        $srID = $_GET['srID'];
        replaceNameModel::delete($srID);
        replaceNameController::index();
    }

}
?>