
<br><br> เพิ่มสถานะ <a href = "?controller=status&action=newStatus"> click </a>

<table class="center" border=1>
<tr> <td><div class="border1"> รหัสสถานะ </div></td>
<td><div class="border1"> สถานะ </div></td>
<td><div class="border1"> Update </div></td>
<td><div class="border1"> Delete </div></td> </tr>

<?php foreach($statusList as $status)
{
    echo "<tr> <td>$status->ssID</td>
    <td>$status->ssName</td>
    <td> <a href=?controller=status&action=updateForm&ssID=$status->ssID> update </a> </td> 
    <td> <a href=?controller=status&action=deleteConfirm&ssID=$status->ssID> delete </a> </td> </tr>";
}
echo "</table>";
?>