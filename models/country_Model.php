<?php

    class countryModel{

        public $cID;
        public $cName;


        public function __construct($cID, $cName)
        {
            $this->cID = $cID;
            $this->cName = $cName;
        }

        public static function getAll(){
            $countryList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `country`" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $cID = $my_row['cID'];
                $cName = $my_row['cName'];
                $countryList[] = new countryModel($cID, $cName);
            }
            require("connection_close.php");
            return $countryList;
        }

        public static function get($cID){
            require("connection_connect.php");
            $sql = "select * from country  where country.cID = '$cID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $cID = $my_row['cID'];
            $cName = $my_row['cName'];
            require("connection_close.php");
            return new countryModel($cID, $cName);
        }

       public static function add($cID, $cName)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO country(cID, cName) VALUES ( '$cID', '$cName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($cID, $cName)
        {
            require("connection_connect.php");
            $sql = "UPDATE country SET  cName = '$cName' where cID = '$cID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($cID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM country WHERE country.cID = '$cID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>