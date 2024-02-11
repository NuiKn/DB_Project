<br><br>
<form method="get" action="">
<label>รหัสชื่อทดแทน <select name="srID" id=""></label>
  
    <?php foreach($replaceNameList as $replace){
    echo"<option value= $replace->srID ";
    if($replace->srID == $replaceName_list->srID){
        echo 'selected="selected"';
    }
    echo"> $replace->srID</option>";
    }?>
    </select></label><br>
    
<label>ชื่อทดแทน <input type="text" name="srName"/>  </label><br>
<input type="hidden" name="controller" value="replace"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>