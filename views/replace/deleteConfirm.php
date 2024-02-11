<?php echo "<br><br> Are you sure to delete this replaceName <br>
             $replaceName_list->srID $replaceName_list->srName <br> <br>";?>
<form method="get" action="">
<input type="hidden" name="controller" value="replace"/>
<input type="hidden" name="srID" value="<?php echo $replaceName_list->srID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>
</form>