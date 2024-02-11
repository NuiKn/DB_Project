<br><br>
<form method="get" action="">
<label>รหัสประเทศ <select name="cID" id=""></label>
  
    <?php foreach($countryList as $country){
    echo"<option value= $country->cID ";
    if($country->cID == $country_list->cID){
        echo 'selected="selected"';
    }
    echo"> $country->cID</option>";
    }?>
    </select></label><br>
    
<label>ประเทศ <input type="text" name="cName"/>  </label><br>
<input type="hidden" name="controller" value="country"/><br>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>