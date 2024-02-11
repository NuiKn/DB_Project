
<br><br> เพิ่มชุดของรายชื่อ <a href = "?controller=column&action=newColumn"> click </a>

<table class="center" border=1>
<tr> <td><div class="border1"> รหัสชุด </div></td>
<td><div class="border1"> ชุดที่ </div></td>
<td><div class="border1"> Update </div></td>
<td><div class="border1"> Delete </div></td> </tr>

<?php foreach($columnList as $column)
{
    echo "<tr> <td>$column->scID</td>
    <td>$column->scName</td>
    <td> <a href=?controller=column&action=updateForm&scID=$column->scID> update </a> </td> 
    <td> <a href=?controller=column&action=deleteConfirm&scID=$column->scID> delete </a> </td> </tr>";
}
echo "</table>";
?>