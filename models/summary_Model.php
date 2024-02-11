<?php

    class summaryModel{

        public $sID;
        public $sName;
        public $sEngName;
        public $sColumn;
        public $status;

        public function __construct($sID, $sName,$sEngName,$sColumn,$status)
        {
            $this->sID = $sID;
            $this->sName = $sName;
            $this->sEngName = $sEngName;
            $this->sColumn = $sColumn;
            $this->status = $status;
        }
        public static function select($cName){
            $summaryList2 = [];
            require("connection_connect.php");
            $sql = "select * from stormList
            NATURAL JOIN country 
            LEFT JOIN stormStatus ON stormStatus.ssID = stormList.status  
            INNER JOIN stormColumn ON stormColumn.scID = stormList.sColumn
            WHERE cName = '$cName'";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $sID = $my_row['sID'];
                $sName = $my_row['sName'];
                $sEngName = $my_row['sEngName'];
                $sColumn = $my_row['scName'];
                $status = $my_row['ssName'];
                
                $summaryList2[] = new summaryModel($sID, $sName,$sEngName,$sColumn,$status);
            }
            require("connection_close.php");
            return $summaryList2;
        }
    }
?>