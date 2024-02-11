
<?php echo "<br><br> Are you sure to delete this stormList <br>
            $storm_list->sID $storm_list->sName <br>";?>

<form method="get" action="">
<input type="hidden" name="controller" value="stormList"/>
<input type="hidden" name="sID" value="<?php echo $storm_list->sID; ?>"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>