<br><br>
<form method="get" action="">
<label>รหัสพายุ <input type="text" name="sID"/> </label><br>
<label>ชื่อพายุ <input type="text" name="sName"/> </label><br>
<label>ชื่ออังกฤษ <input type="text" name="sEngName"/> </label><br>
<label>รหัสประเทศ <select name="cID">
<?php 
        foreach($countryList as $country)
        { echo "<option value = $country->cID > $country->cName </option>"; }
?>
</select></label><br>
<label>ความหมาย <input type="text" name="sMean"/> </label><br>
<label>ปีเริ่มใช้ <input type="text" name="startDate"/>  </label><br>
<label>ปีเลิกใช้ <input type="text" name="endDate"/>   </label><br>
<label>ชุดของรายชื่อ <select name="scID">
<?php 
        foreach($columnList as $column)
        { echo "<option value = $column->scID > $column->scName </option>"; }
?>
</select></label><br>
<label>ชื่อทดแทน <select name="srID">
<?php 
        foreach($replaceNameList as $replace)
        { echo "<option value = $replace->srID> $replace->srName</option>"; }
?>
</select></label><br>
<label>สถานะ <select name="ssID">
<?php 
        foreach($statusList as $status)
        { echo "<option value = $status->ssID> $status->ssName</option>"; }
?>
</select></label><br><br>
<input type="hidden" name="controller" value="stormList"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addStormList"> Save</button>

</form>