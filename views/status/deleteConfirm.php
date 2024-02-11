
<?php echo "<br><br> Are you sure to delete this status <br>
            $status_list->ssID $status_list->ssName <br>";?>

<form method="get" action="">
<input type="hidden" name="controller" value="status"/>
<input type="hidden" name="ssID" value="<?php echo $status_list->ssID; ?>"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>