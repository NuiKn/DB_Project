
<br><br> เพิ่มประเทศ <a href = "?controller=country&action=newCountry"> click </a>

<table class="center" border=1 >

<tr> <td> <div class="border1"> รหัสประเทศ </div></td>
    <td><div class="border1"> ประเทศ</td>
    <td><div class="border1"> Update</td>
    <td><div class="border1"> Delete</td> </tr>

<?php foreach($countryList as $country)
{
    echo "<tr> <td>$country->cID</td>
    <td>$country->cName</td>
    <td> <a href=?controller=country&action=updateForm&cID=$country->cID> update </a> </td> 
    <td> <a href=?controller=country&action=deleteConfirm&cID=$country->cID> delete </a> </td> </tr>";
}
echo "</table>";
?>