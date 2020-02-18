<?php
 $con=mysql_connect("localhost","root","") or die("Sorry Can't Connect");
        $db=mysql_select_db("vv",$con);
if($_POST['cityid'])
{
$cityid=$_POST['cityid'];
$sql=mysql_query("SELECT * FROM college WHERE cityid='$cityid'");
while($row=mysql_fetch_array($sql))
{
$collegeid=$row['collegeid'];
$collegename=$row['college'];
echo '<option value="'.$collegeid.'">'.$collegename.'</option>';
}
}
?>