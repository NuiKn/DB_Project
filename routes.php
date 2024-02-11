<?php
$controllers = array('pages'=>['home','error'],
                    'country'=>['index','newCountry','addCountry','updateForm','update','deleteConfirm','delete'],
                    'status'=>['index','newStatus','addStatus','updateForm','update','deleteConfirm','delete'],
                    'stormList'=>['index','newStormList','addStormList','updateForm','update','deleteConfirm','delete'],
                    'column'=>['index','newColumn','addColumn','updateForm','update','deleteConfirm','delete'],
                    'replace'=>['index','newReplace','addReplace','updateForm','update','deleteConfirm','delete'],
                    'summary'=>['index','select']
                    );
function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController(); 
                        break;  
        case "country": require_once("models/country_Model.php");
                        $controller = new countryController();
                        break;
        case "stormList":   require_once("models/stormList_Model.php");
                            require_once("models/country_Model.php");
                            require_once("models/status_Model.php");
                            require_once("models/column_Model.php");
                            require_once("models/replace_Model.php");
                            $controller = new stormListController();
                            break;
        case "status":  require_once("models/status_Model.php");
                        $controller = new statusController();
                        break;
        case "column":  require_once("models/column_Model.php");
                        $controller = new columnController();
                        break;
        case "replace":  require_once("models/replace_Model.php");
                            $controller = new replaceNameController();
                            break;
        case "summary": require_once("models/summary_Model.php");
                        require_once("models/stormList_Model.php");
                        require_once("models/country_Model.php");
                        require_once("models/status_Model.php");
                        require_once("models/column_Model.php");
                        $controller = new summaryController();
                        break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}else{
    call('pages','error');
}
?>