<br><br>
<form method="get" action="">
<label>รหัสสถานะ <select name="ssID" id=""></label>
    
    <?php foreach($statusList as $status){
    echo"<option value= $status->ssID ";
    if($status->ssID == $status_list->ssID){
        echo 'selected="selected"';
    }
    echo"> $status->ssID</option>";
    }?>
    </select></label><br>
    
<label>สถานะ <input type="text" name="ssName"/>  </label><br>
<input type="hidden" name="controller" value="status"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>

</form>
