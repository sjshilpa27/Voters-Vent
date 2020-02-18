<?php session_start();
            $country=$_REQUEST["country"];
            $state=$_REQUEST["state"];
            $city=$_REQUEST["city"];
            $college=$_REQUEST["college"];
              $_SESSION["country"] = $country;
        $_SESSION["state"] = $state;
          $_SESSION["city"] = $city;
            $_SESSION["college"] = $college;
      
              $con = mysql_connect("localhost", "root", "") or die("Sorry cant connect");
    mysql_select_db("vv", $con);
    $sql = "Select college from college where collegeid='".$college;
    $result = mysql_query($sql, $con);
    $row = mysql_fetch_array($result);
    if (mysql_affected_rows() > 0) {
      $clgname = $row["college"];
         //$_SESSION["userid"] = $row["college"];
       echo $clgname;
    }
  
            ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>college</title>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
$(document).ready(function(){
$(".country").change(function(){
$(".country").val("101");
var countryid=$(this).val();
var dataString = 'countryid='+ countryid;
$.ajax
({
type: "POST",
url: "state.php",
data: dataString,
cache: false,
success: function(html)
{
$(".state").html(html);
}
});
});
});            
            
            </script>
<script type="text/javascript">
                $(document).ready(function()
{
$(".state").change(function()
{
var stateid=$(this).val();
var dataString = 'stateid='+ stateid;

$.ajax
({
type: "POST",
url: "city.php",
data: dataString,
cache: false,
success: function(html)
{
$(".city").html(html);
}
});
});
});             
</script>

<script type="text/javascript">
                $(document).ready(function()
{
$(".city").change(function()
{
var cityid=$(this).val();
var dataString = 'cityid='+ cityid;

$.ajax
({
type: "POST",
url: "college.php",
data: dataString,
cache: false,
success: function(html)
{
$(".college").html(html);
}
});
});
});             
</script>
</head>
<body>
        <?php
        // put your code here
        ?>
    <form name="demo" action="index_1.php" method="get">
            <table>              
        <tr>
        <td>Country</td>
        <td><?php
        $con=mysql_connect("localhost","root","") or die("Sorry Can't Connect");
        $db=mysql_select_db("vv",$con);
        $qry="Select * from country";
        $result=mysql_query($qry,$con);
        echo"<select name='country'  class='country' id='cb'>";
        echo"<option value=''>--- Select Country ---</option>";
        while($row=mysql_fetch_array($result)) 
        {
         echo"<option value='".$row['countryid']."'>".$row['country']."</option>";
        }
         echo"</select>";

        ?>
        </td>
      </tr>
      <tr>
          <td>State</td>
        <td><select name="state"  class="state" id='cb'>
            <option value="">--- Select State ---</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>City</td>
        <td><select name="city"  class="city" id='cb'>
            <option value="">--- Select City ---</option>
          </select>
        </td>
      </tr>
               <tr>
        <td>College</td>
        <td><select name="college"  class="college" id='cb'>
            <option value="">--- Select College ---</option>
          </select>
        </td>
      </tr>
      <tr>
      <input type="submit" value="SAVE" name="btnsave" />
      </tr>

            </table>
            
        </form>
    <a href='post.php?clg=<?php echo $clgname; ?>'></a>
        
    </body>
</html>
