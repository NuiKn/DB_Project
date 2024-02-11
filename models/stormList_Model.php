<?php

    class stormListModel{

        public $sID;
        public $sName;
        public $sEngName;
        public $cName;
        public $cID; #
        public $sMean;
        public $startDate;
        public $endDate;
        public $sColumn;
        public $scID; #
        public $sReplaceName;
        public $srID; #
        public $status;
        public $ssID; #

        public function __construct($sID, $sName,$sEngName,$cName,$sMean,$startDate,$endDate,$sColumn,$sReplaceName,$status,$cID,$scID,$srID,$ssID)
        {
            $this->sID = $sID;
            $this->sName = $sName;
            $this->sEngName = $sEngName;
            $this->cName = $cName;
            $this->sMean = $sMean;
            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->sColumn = $sColumn;
            $this->sReplaceName = $sReplaceName;
            $this->status = $status;
            $this->cID = $cID;
            $this->scID = $scID;
            $this->srID = $srID;
            $this->ssID = $ssID;
        }

        public static function getAll(){
            $stormList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `stormList`
                    INNER JOIN country ON country.cID = stormList.cID
                    LEFT JOIN stormStatus ON stormStatus.ssID = stormList.status  
                    INNER JOIN stormColumn ON stormColumn.scID = stormList.sColumn
                    LEFT JOIN stormReplaceName ON stormReplaceName.srID = stormList.sReplaceName
                    ORDER BY `stormList`.`sID`" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $sID = $my_row['sID'];
                $sName = $my_row['sName'];
                $sEngName = $my_row['sEngName'];
                $cName = $my_row['cName'];
                $sMean = $my_row['sMean'];
                $startDate = $my_row['startYear'];
                $endDate = $my_row['endYear'];
                $sColumn = $my_row['scName'];
                $sReplaceName = $my_row['srName'];
                $status = $my_row['ssName'];
                $cID = $my_row['cID'];
                $scID = $my_row['scID'];
                $srID = $my_row['srID'];
                $ssID = $my_row['ssID'];

                $stormList[] = new stormListModel($sID, $sName,$sEngName,$cName,$sMean,$startDate,$endDate,$sColumn,$sReplaceName,$status,$cID,$scID,$srID,$ssID);
            }
            require("connection_close.php");
            return $stormList;
        }
/*SELECT sID,sName,sEngName,sMean,startDate,endDate,sColumn,sReplaceName,status,cName,ssName,scName,srName FROM `stormList`
                INNER JOIN country ON country.cID = stormList.cID
                LEFT JOIN stormStatus ON stormStatus.ssID = stormList.status  
                INNER JOIN stormColumn ON stormColumn.scID = stormList.sColumn
                LEFT JOIN stormReplaceName ON stormReplaceName.srID = stormList.sReplaceName*/ 
        public static function get($sID){
            require("connection_connect.php");
            $sql = "select * from stormList
            NATURAL JOIN country 
            LEFT JOIN stormStatus ON stormStatus.ssID = stormList.status  
            INNER JOIN stormColumn ON stormColumn.scID = stormList.sColumn
            LEFT JOIN stormReplaceName ON stormReplaceName.srID = stormList.sReplaceName 
            WHERE sID = '$sID'
            ";#WHERE sID = '$sID'

            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $sID = $my_row['sID'];
            $sName = $my_row['sName'];
            $sEngName = $my_row['sEngName'];
            $cName = $my_row['cName'];
            $sMean = $my_row['sMean'];
            $startDate = $my_row['startYear'];
            $endDate = $my_row['endYear'];
            $sColumn = $my_row['scName'];
            $sReplaceName = $my_row['srName'];
            $status = $my_row['ssName'];
            $cID = $my_row['cID'];
            $scID = $my_row['sColumn'];
            $srID = $my_row['sReplaceName'];
            $ssID = $my_row['status'];
            require("connection_close.php");
            return new stormListModel($sID, $sName,$sEngName,$cName,$sMean,$startDate,$endDate,$sColumn,$sReplaceName,$status,$cID,$scID,$srID,$ssID);
        }

        public static function add($sID, $sName,$sEngName,$cID,$sMean,$startDate,$endDate,$scID,$srID,$ssID)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO stormList(sID,sName,sEngName,cID,sMean,startYear,endYear,sColumn,sReplaceName,status) 
                    VALUES ('$sID', '$sName','$sEngName','$cID','$sMean','$startDate','$endDate','$scID','$srID','$ssID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($sID, $sName,$sEngName,$cID,$sMean,$startDate,$endDate,$scID,$srID,$ssID)
        {
            require("connection_connect.php");
            $sql = "UPDATE stormList SET sID = '$sID', sName = '$sName', sEngName = '$sEngName', cID = '$cID', sMean = '$sMean', 
                    startYear = '$startDate', endYear = '$endDate',  sColumn = '$scID', sReplaceName = '$srID', status = '$ssID' where stormList.sID = '$sID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($sID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM stormList WHERE sID = '$sID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
?>