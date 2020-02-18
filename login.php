<?php session_start();

 
 
if (isset($_REQUEST['btn'])) {
    $user = $_REQUEST["un"];
    $pass = $_REQUEST["pw"];
     $status=$_REQUEST["txtstatus"];
    $con = mysql_connect("localhost", "root", "") or die("Sorry cant connect");
    mysql_select_db("vv", $con);
     if($status=="authority")
     {
         $sql = "Select * from authority_details where username='" . $user . "' and password='" . $pass . "'";
     }
     if($status=="candidate")
     {
         $sql = "Select * from candidate_profile where username='" . $user . "' and password='" . $pass . "'";
     }
     if($status=="voter")
     {
         $sql = "Select * from voter_details where username='" . $user . "' and password='" . $pass . "'";
     }
     $result = mysql_query($sql, $con);
    $row = mysql_fetch_array($result);
    if (mysql_affected_rows() > 0) {
        $_SESSION["username"] = $user;
        $_SESSION["userid"] = $row["cid"];
       echo $_SESSION["userid"];
        header("Location:home.php");
    } else {
        echo "Check your username and password";
    }
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="unpw" action="login.php">
        
        <table border="1">
           
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="un" value="" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pw" value="" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Log In" name="btn" /></td>
                    
                </tr>
                        <input type='text' value='<?php echo $_REQUEST["status"];?>' name='txtstatus' hidden>
           
        </table>
        </form>
        
        <a href='candidate_regis.php.php?status='>Register</a>

      
    </body>
</html>
