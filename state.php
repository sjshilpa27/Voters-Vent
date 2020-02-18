<?php
 $con=mysql_connect("localhost","root","") or die("Sorry Can't Connect");
        $db=mysql_select_db("vv",$con);
if($_POST['countryid'])
{
$countryid=$_POST['countryid'];
$sql=mysql_query("SELECT * FROM state WHERE countryid='$countryid'");
while($row=mysql_fetch_array($sql))
{
$stateid=$row['stateid'];
$statename=$row['statename'];
echo '<option value="'.$stateid.'">'.$statename.'</option>';
}
}
?>