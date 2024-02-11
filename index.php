<?php
    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else
    {
        $controller = 'pages';
        $action = 'home';
    }
?>
<html></head>
<body>
<style>
	.border2{
        border: solid 1px black;
        background-color: lightgreen;
        padding: 5px;
        display:inline-block;
    }
    body {
    background-color: lightblue;
    text-align: center;
    font-size: 25px;
    font-weight: bold;
    color: purple;
    }
    .border1{
        border: solid 1px black;
        background-color: lightgreen;
        font-weight: bold;
        font-size: 25px;
        width : auto;
  		height : auto;
        display:inline-block;
    }

    .center {
            margin-left: auto; 
            margin-right: auto;   
    }


</style>
    <?php echo "controller = ".$controller.",action = ".$action; ?><br>
    <br><div class="border1"><a href="?controller=pages&action=home">Home </a></div><br><br>
    <div class="border2">
    <a href="?controller=country&action=index">ประเทศ </a> </div> &nbsp; 
    <div class="border2">
    <a href="?controller=status&action=index">สถานะ </a><t> </div> &nbsp; 
    <div class="border2">
    <a href="?controller=column&action=index">ชุดของรายชื่อ </a></div> &nbsp; 
    <div class="border2">
    <a href="?controller=replace&action=index">ชื่อทดแทน </a></div> &nbsp; 
    <div class="border2">
    <a href="?controller=stormList&action=index">รายชื่อพายุ </a></div> &nbsp; 
    <div class="border2">
    <a href="?controller=summary&action=index">สรุปรายชื่อพายุ </a> </div>
    
    <?php require_once("routes.php"); ?>
     
</body>
<html>