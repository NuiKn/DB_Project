<?php

    class columnModel{

        public $scID;
        public $scName;


        public function __construct($scID, $scName)
        {
            $this->scID = $scID;
            $this->scName = $scName;
        }

        public static function getAll(){
            $columnList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `stormColumn`" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $scID = $my_row['scID'];
                $scName = $my_row['scName'];
                $columnList[] = new columnModel($scID, $scName);
            }
            require("connection_close.php");
            return $columnList;
        }

        public static function get($scID){
            require("connection_connect.php");
            $sql = "select * from stormColumn  where stormColumn.scID = '$scID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $scID = $my_row['scID'];
            $scName = $my_row['scName'];
            require("connection_close.php");
            return new columnModel($scID, $scName);
        }

       public static function add($scID, $scName)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO stormColumn(scID, scName) VALUES ( '$scID', '$scName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($scID, $scName)
        {
            require("connection_connect.php");
            $sql = "UPDATE stormColumn SET  stormColumn.scName = '$scName' where stormColumn.scID = '$scID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($scID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM stormColumn WHERE stormColumn.scID = '$scID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>