<?php //session_start();

/*if(isset($_SESSION<["username"])&& isset($_SESSION["userid"]))
{
echo  $_SESSION["username"];
echo " ".$_SESSION["userid"];
*/

if (isset($_REQUEST["btnsave"])) {
    $vid = $_REQUEST["txtid"];
        $username = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
    $name = $_REQUEST["txtname"];      
    $dob = $_REQUEST["txtdob"];
    $nationality = $_REQUEST["txtnation"];
     $vidcard=$_REQUEST["txtvidno"];
   $uid = $_REQUEST["txtaadhar"];
   $email = $_REQUEST["txtemail"];
    $add=$_REQUEST["txtadd"];
    $mobile = $_REQUEST["txtmobile"]; 
    $comment = $_REQUEST["comment"];
            $gender = $_REQUEST["gender"];
               // $pwd = $_REQUEST["pwd"];
//        $fn= $_REQUEST["txtfn"];
// $mn= $_REQUEST["txtmn"];
//    $blood=$_REQUEST["bgroup"];
  $security=$_REQUEST["securityque"];
                    $sec_ans=$_REQUEST["txtans"];
                   // $idno = $_REQUEST["txtidno"];

    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
            
            
            
            $qry ="INSERT INTO voter_details(vid, username,
                    password, name, voter_id, uid, dob, gender,
                    nationality, email, address, mobileno, time,security_que,security_ans)
                    VALUES ('".$vid."','".$username."','".$pass."','".$name."',
                    '".$vidcard."','".$uid."','".$dob."','".$gender."',
                   '".$nationality."','".$email."','".$add."',
                    ,'".$mobile."',now(),'".security."','".$sec_ans."')";

echo $qry;
            if (mysql_query($qry, $con)) {
                echo"Data Saved Successfully";
            } else {
                echo "Error" . mysql_error();
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
        <form action="voter_regis.php">
            <table border="1">
                             <tr>
                        <td>Voter id:</td>
                        <td><input type="text" name="txtid" readonly value="vi<?php      $con = mysql_connect("localhost", "root", "") or die("Sorry! Cannot Connect");
        mysql_select_db("vv", $con);
$qry1="SELECT MAX(CAST(SUBSTRING(vid,3) AS unsigned)) AS maxid FROM voter_details";
        mysql_query($qry1, $con);
   //     echo $qry1;
               $result=mysql_query($qry1,$con);
             $row = mysql_fetch_array($result);
        $id=$row["maxid"]+1;
  echo $id ?>" /></td>
                    </tr>
                    
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="txtname" value="" required/></td>
                    </tr>
                   
                    <tr>
                        <td>DOB:</td>
                        <td><input type="text" name="txtdob" value="" required/></td>
                    </tr>
                                       <tr>
                        <td>Nationality:</td>
                        <td><input type="text" name="txtnation" value="" required /></td>
                    </tr>
                                      <tr>
                        <td>Voter-Id Card No.:</td>
                        <td><input type="text" name="txtvidno" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Aadhar card no:</td>
                        <td><input type="text" name="txtaadhar" value="" required /></td>
                    </tr>
                    
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="txtemail" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea name="txtadd" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Mobile number:</td>
                        <td><input type="text" name="txtmobile" value="" required /></td>
                    </tr>
                    <tr> 
                        <td>Comment:</td>
                        <td><textarea name="comment" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="yes" checked="checked" />Female
                            <input type="radio" name="gender" value="no" />Male</td>
                    </tr>
                    <tr>
                        <td>PWD:</td>
                        <td><input type="radio" name="pwd" value="yes" checked="checked"/>Female
                            <input type="radio" name="pwd" value="no" />Male</td>
<!--                    </tr>
                    <tr>
                        <td>Fathers Name:</td>
                        <td><input type="text" name="txtfn" value="" /></td>
                    </tr>
                     <tr>
                        <td>Mothers Name:</td>
                        <td><input type="text" name="txtmn" value="" /></td>
                    </tr>-->
                          <tr>
                        <td>Security Question:</td>
                        <td><select name="securityque">
                                <option value="0">--Select--</option>
                                <option value="1">My favorite school teacher?</option>
                                <option value="2">My first Phone: </option>
                                <option value="3">My favorite Destination:</option>
                                <option value="4">My biggest dream:</option>
                                <option value="5">My Inspiration:</option>
                            </select><br>
                            <input type="text" name="txtans" value="" /></td>
                            
                    </tr>
                     <tr>
                        <td colspan="2"><input type="submit" value="SAVE" name="btnsave" /></td>
                        
                    </tr>
                   
                    
            </table>

            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
     <?php
/*}
 else {
    header('Location:login.php');
}
*/
?>
