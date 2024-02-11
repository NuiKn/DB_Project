<?php

    class statusModel{

        public $ssID;
        public $ssName;


        public function __construct($ssID, $ssName)
        {
            $this->ssID = $ssID;
            $this->ssName = $ssName;
        }

        public static function getAll(){
            $statusList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM `stormStatus`" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $ssID = $my_row['ssID'];
                $ssName = $my_row['ssName'];
                $statusList[] = new statusModel($ssID, $ssName);
            }
            require("connection_close.php");
            return $statusList;
        }
        public static function get($ssID){
            require("connection_connect.php");
            $sql = "select * from stormStatus where stormStatus.ssID = '$ssID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $ssID = $my_row['ssID'];
            $ssName = $my_row['ssName'];
            require("connection_close.php");
            return new statusModel($ssID, $ssName);
        }

        public static function add($ssID, $ssName)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO stormStatus( ssID, ssName) VALUES ('$ssID', '$ssName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($ssID, $ssName)
        {
            require("connection_connect.php");
            $sql = "UPDATE stormStatus SET ssName = '$ssName' where ssID = '$ssID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($ssID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM stormStatus WHERE stormStatus.ssID = '$ssID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>