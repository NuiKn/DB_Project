<?php
class stormListController{

    public function index()
    {
        $stormList = stormListModel::getAll();
        require_once("views/stormList/index_stormList.php");
    }

    public function newStormList()
    {
        
        $stormList = stormListModel::getAll();
        $countryList = countryModel::getAll();
        $statusList = statusModel::getAll();
        $columnList = columnModel::getAll();
        $replaceNameList = replaceNameModel::getAll();
        
        require_once('views/stormList/newStormList.php');
    }

   public function addStormList(){
        $sID = $_GET['sID'];
        $sName = $_GET['sName'];
        $sEngName = $_GET['sEngName'];
        $cID = $_GET['cID'];
        $sMean = $_GET['sMean'];
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
        $scID = $_GET['scID'];
        $srID = $_GET['srID'];
        $ssID = $_GET['ssID'];

        stormListModel::add($sID, $sName,$sEngName,$cID,$sMean,$startDate,$endDate,$scID,$srID,$ssID);
        stormListController::index();
       
    }

   public function updateForm(){
        $sID = $_GET['sID'];
        $storm_list = stormListModel::get($sID);
        $stormList = stormListModel::getAll();
        $countryList = countryModel::getAll();
        $statusList = statusModel::getAll();
        $columnList = columnModel::getAll();
        $replaceNameList = replaceNameModel::getAll();

        require_once("views/stormList/updateForm.php");
        
    }

   public function update(){
        $sID = $_GET['sID'];
        $sName = $_GET['sName'];
        $sEngName = $_GET['sEngName'];
        $cID = $_GET['cID'];
        $sMean = $_GET['sMean'];
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
        $scID = $_GET['scID'];
        $srID = $_GET['srID'];
        $ssID = $_GET['ssID'];
        stormListModel::update($sID, $sName,$sEngName,$cID,$sMean,$startDate,$endDate,$scID,$srID,$ssID);
        stormListController::index();
       
    }

   public function deleteConfirm(){
        $sID = $_GET['sID'];
        $storm_list = stormListModel::get($sID);
        require_once("views/stormList/deleteConfirm.php");
    }

    public function delete(){
        $sID = $_GET['sID'];
        stormListModel::delete($sID);
        stormListController::index();
    }
}
?>