<?php echo "<br><br> Are you sure to delete this country <br>
             $country_list->cID $country_list->cName <br> <br>";?>
<form method="get" action="">
<input type="hidden" name="controller" value="country"/>
<input type="hidden" name="cID" value="<?php echo $country_list->cID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>
</form>