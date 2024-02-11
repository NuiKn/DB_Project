<?php
class countryController{

    public function index(){
        $countryList = countryModel::getAll();
        require_once("views/country/index_country.php");
    }
    public function newCountry(){
        $countryList = countryModel::getAll();
        require_once('views/country/newCountry.php');
    }

    public function addCountry(){
        $cID = $_GET['cID'];
        $cName = $_GET['cName'];
        countryModel::add($cID, $cName);
        countryController::index();
    }
   public function updateForm(){
        $cID = $_GET['cID'];
        $country_list = countryModel::get($cID);
        $countryList = countryModel::getAll();
        require_once("views/country/updateForm.php");
    }
    public function update(){
        $cID = $_GET['cID'];
        $cName = $_GET['cName'];
        countryModel::update($cID, $cName);
        countryController::index();
    }

    public function deleteConfirm(){
        $cID = $_GET['cID'];
        $country_list = countryModel::get($cID);
        require_once("views/country/deleteConfirm.php");
    }

    public function delete(){
        $cID = $_GET['cID'];
        countryModel::delete($cID);
        countryController::index();
    }

}
?>