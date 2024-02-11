
<br><br> เพิ่มชื่อทดแทน <a href = "?controller=replace&action=newReplace"> click </a>

<table class="center" border=1>
<tr> <td><div class="border1"> รหัส </div></td>
<td><div class="border1"> ชื่อทดแทน </div></td>
<td><div class="border1"> Update </div></td>
<td><div class="border1"> Delete </div></td> </tr>

<?php foreach($replaceNameList as $replace)
{
    echo "<tr> <td>$replace->srID</td>
    <td>$replace->srName</td>
    <td> <a href=?controller=replace&action=updateForm&srID=$replace->srID> update </a> </td> 
    <td> <a href=?controller=replace&action=deleteConfirm&srID=$replace->srID> delete </a> </td> </tr>";
}
echo "</table>";
?>