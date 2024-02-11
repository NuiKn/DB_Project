<br><br>
<form method="get" action="">
<label>รหัสชุด <select name="scID" id=""></label>
  
    <?php foreach($columnList as $column){
    echo"<option value= $column->scID ";
    if($column->scID == $column_list->scID){
        echo 'selected="selected"';
    }
    echo"> $column->scID</option>";
    }?>
    </select></label><br>
    
<label>ชุดที่ <input type="text" name="scName"/>  </label><br>
<input type="hidden" name="controller" value="column"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>