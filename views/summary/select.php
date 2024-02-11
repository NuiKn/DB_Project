
<br><br>
<table class="center" border=1>
<tr><td> <div class="border1"> รหัสรายชื่อ </div></td>
<td> <div class="border1"> ชื่อพายุ </div></td>
<td> <div class="border1"> ชื่ออังกฤษ </div></td>
<td> <div class="border1"> ชุดที่ </div></td>
<td> <div class="border1"> สถานะ </div></td></tr>

<?php foreach($summaryList as $sum)
{
    echo "<tr> <td>$sum->sID</td>
    <td>$sum->sName</td>
    <td>$sum->sEngName</td>
    <td>$sum->sColumn</td>
    <td>$sum->status</td></tr>";
}
echo "</table>";
?>