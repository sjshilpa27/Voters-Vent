<?php
 $con=mysql_connect("localhost","root","") or die("Sorry Can't Connect");
        $db=mysql_select_db("vv",$con);
if($_POST['stateid'])
{
$stateid=$_POST['stateid'];
$sql=mysql_query("SELECT * FROM city WHERE stateid='$stateid'");
while($row=mysql_fetch_array($sql))
{
$cityid=$row['cityid'];
$cityname=$row['city'];
echo '<option value="'.$cityid.'">'.$cityname.'</option>';
}
}
?>