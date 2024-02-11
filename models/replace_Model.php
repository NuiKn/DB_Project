<?php

    class replaceNameModel{

        public $srID;
        public $srName;


        public function __construct($srID, $srName)
        {
            $this->srID = $srID;
            $this->srName = $srName;
        }

        public static function getAll(){
            $replaceNameList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `stormReplaceName`" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $srID = $my_row['srID'];
                $srName = $my_row['srName'];
                $replaceNameList[] = new replaceNameModel($srID, $srName);
            }
            require("connection_close.php");
            return $replaceNameList;
        }

        public static function get($srID){
            require("connection_connect.php");
            $sql = "select * from stormReplaceName  where stormReplaceName.srID = '$srID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $srID = $my_row['srID'];
            $srName = $my_row['srName'];
            require("connection_close.php");
            return new replaceNameModel($srID, $srName);
        }

       public static function add($srID, $srName)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO stormReplaceName(srID, srName) VALUES ( '$srID', '$srName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($srID, $srName)
        {
            require("connection_connect.php");
            $sql = "UPDATE stormReplaceName SET  srName = '$srName' where srID = '$srID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($srID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM stormReplaceName WHERE stormReplaceName.srID = '$srID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>