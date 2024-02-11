<?php echo "<br><br> Are you sure to delete this column <br>
             $column_list->scID $column_list->scName <br> <br>";?>
<form method="get" action="">
<input type="hidden" name="controller" value="column"/>
<input type="hidden" name="scID" value="<?php echo $column_list->scID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>
</form>