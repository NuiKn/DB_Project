
<br><br> เพิ่มรายชื่อพายุ <a href = "?controller=stormList&action=newStormList"> click </a>
<style>
    .border0{
        border: solid 1px black;
        background-color: lightgreen;
        font-weight: bold;
        font-size: 25px;
        width : 320px;
  		height : auto;
        display:inline-block;
    }
</style>

<table class="center" border=1>
<tr><td> <div class="border1"> รหัสรายชื่อ </div></td>
<td> <div class="border1"> ชื่อพายุ </div></td>
<td> <div class="border1"> ชื่ออังกฤษ </div></td>
<td> <div class="border1"> ประเทศ </div></td>
<td> <div class="border0"> ความหมาย </div></td>
<td> <div class="border1"> ปีเริ่มใช้ </div></td>
<td> <div class="border1"> ปีเลิกใช้ </div></td>
<td> <div class="border1"> ชุดที่ </div></td>
<td> <div class="border1"> ชื่อทดแทน </div></td>
<td> <div class="border1"> สถานะ </div></td>
<td> <div class="border1"> Update </div></td>
<td> <div class="border1"> Delete </div></td> </tr>

<?php foreach($stormList as $storm)
{
    echo "<tr> <td>$storm->sID</td>
    <td>$storm->sName</td>
    <td>$storm->sEngName</td>
    <td>$storm->cName</td>
    <td>$storm->sMean</td>
    <td>$storm->startDate</td>
    <td>$storm->endDate</td>
    <td>$storm->sColumn</td>
    <td>$storm->sReplaceName</td>
    <td>$storm->status</td>
    <td> <a href=?controller=stormList&action=updateForm&sID=$storm->sID> Update </td> 
    <td> <a href=?controller=stormList&action=deleteConfirm&sID=$storm->sID> delete</td> </tr>";
}
echo "</table>";
?>