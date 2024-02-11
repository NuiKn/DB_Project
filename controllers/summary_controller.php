<?php class summaryController
   {
    public function index()
    {
        $countryList = countryModel::getAll();
        require_once('views/summary/index_summary.php');
    }
    public function select(){
        $cName = $_GET['cName'];
        $summaryList = summaryModel::select($cName);
        require_once('views/summary/select.php');
       
    }

   }
?>