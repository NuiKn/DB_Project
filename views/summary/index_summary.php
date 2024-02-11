<br><br>
<form>
<label>ประเทศ <select name="cName"> 
<?php foreach($countryList as $country){ 
        echo"<option value= $country->cName ";
        echo "> $country->cName</option>";
        }; 
        ?></select></label><br>
<input type="hidden" name="controller" value="summary"/>
<button type="submit" name="action" value="select"> Select</button>
</form>