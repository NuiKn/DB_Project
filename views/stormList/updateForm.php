<br><br>
<form method="get" action="">
<label>รหัสพายุ <select name="sID" >
<?php foreach($stormList as $storm){
        echo"<option value= $storm->sID ";
        if($storm->sID == $storm_list->sID){
                echo 'selected="selected"';
        }
        echo"> $storm->sID</option>";
        }?>
        </select></label><br>
<label>ชื่อพายุ <input type="text" name="sName"/> </label><br>
<label>ชื่ออังกฤษ <input type="text" name="sEngName"/> </label><br>
<label>ประเทศ <select name="cID"> 
<?php foreach($countryList as $country){ 
        echo"<option value= $country->cID ";
        if($country->cID == $storm_list->cID){
        echo 'selected="selected"';
        }
        echo"> $country->cName</option>";
        }; 
        ?></select></label><br>
<label>ความหมาย <input type="text" name="sMean"/> </label><br>
<label>ปีเริ่มใช้ <input type="text" name="startDate"/>  </label><br>
<label>ปีเลิกใช้ <input type="text" name="endDate"/>   </label><br>
<label>ชุดของรายชื่อ <select name="scID">
<?php foreach($columnList as $column){ 
        echo"<option value= $column->scID ";
        if($column->scID == $storm_list->scID){
        echo 'selected="selected"';
        }
        echo"> $column->scName</option>";
        }; 
        ?></select></label><br>
<label>ชื่อทดแทน <select name="srID">
<?php foreach($replaceNameList as $replace){ 
        echo"<option value= $replace->srID ";
        if($replace->srID == $storm_list->srID){
        echo 'selected="selected"';
        }
        echo"> $replace->srName</option>";
        }; 
        ?></select></label><br>
<label>สถานะ <select name="ssID">
<?php foreach($statusList as $status){ 
        echo"<option value= $status->ssID ";
        if($status->ssID == $storm_list->ssID){
        echo 'selected="selected"';
        }
        echo"> $status->ssName</option>";
        }; 
        ?></select></label><br>
<input type="hidden" name="controller" value="stormList"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Save</button>

</form>