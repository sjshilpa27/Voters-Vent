<?php session_start();

//if(isset($_SESSION["username"])&& isset($_SESSION["userid"]))
//{
//echo  $_SESSION["username"];
//echo " ".$_SESSION["userid"];


if (isset($_REQUEST["btnsave"])) {
    $aid = $_REQUEST["txtid"];
        $username = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
    $name = $_REQUEST["txtname"];
        $age = $_REQUEST["txtage"];
    $dob = $_REQUEST["txtdob"];
    $nationality = $_REQUEST["txtnation"];
    $qual = $_REQUEST["txtqual"];
       $desig = $_REQUEST["txtdesignation"];
    $uid = $_REQUEST["txtaadhar"];
 
   $email = $_REQUEST["txtemail"];
    $add=$_REQUEST["txtadd"];
    $mobile = $_REQUEST["txtmobile"];
       //     $gender = $_REQUEST["gender"];
 
    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
            
            
            $qry="INSERT INTO authority_details(aid, name, 
                    nationality,qualification, designation, email, 
                    address, mobileno, dob,time, username,
                    password) VALUES('".$aid."','".$name."','".$nationality."',
                     '".$qual."','".$desig."','".$email."','".$add."','".$mobile."',
                         '".$dob."',now(),'".$username."','".$pass."')";
                    
              /*      $qry = "INSERT INTO candidate_profile(cno, cid, username, password,
                name, age, dob, nationality, criminal_record ,uid, money_deposited,
               proposers, oath_taken, election_type, post, email, p_address, pan_no,
               biometric_test, sound_mind, gender, court_case, bankrupt, maritial_status,
               time,candidate_id_no, tenure, mobileno, office_govt) 
               VALUES ('".$cid."','".$username."','".$pass."','".$name."','".$age."',
                     '".$dob."','".$nationality."','".$crimrec."','".$uid."',
                   '".$money."','".$prposers."','".$oath."','".$election."',
                     '".$post."','".$email."','".$add."','".$panno."',  
                   '".$bio."','".$soundmind."','".$gender."','".$courtcase."', 
                       '".$insolvent."','".$marital."',now(),'".$idno."','".$tenure."',
                      '".$mobile."','".$office."')";
*/

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
        <form action="authority_regis.php">
            <table border="1">
                <tr>
                        <td>Authority id:</td>

                        <td><input type="text" name="txtid" readonly value="ai<?php      $con = mysql_connect("localhost", "root", "") or die("Sorry! Cannot Connect");
        mysql_select_db("vv", $con);
$qry1="SELECT MAX(CAST(SUBSTRING(aid,3) AS unsigned)) AS maxid FROM authority_details ";
        mysql_query($qry1, $con);
   //     echo $qry1;
               $result=mysql_query($qry1,$con);
             $row = mysql_fetch_array($result);
        $id=$row["maxid"]+1;
  echo $id ?>" /></td>
                    </tr>
                    
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" value="" required /></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="txtname" value="" required /></td>
                    </tr>
                         <tr>
                        <td>Designation:</td>
                        <td><input type="text" name="txtdesignation" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Qualification:</td>
                        <td><input type="text" name="txtqual" value="" required/></td>
                    </tr>
               
                    <tr>
                        <td>DOB:</td>
                        <td><input type="text" name="txtdob" value="" required/></td>
                    </tr>
                                       <tr>
                        <td>Nationality:</td>
                        <td><input type="text" name="txtnation" value="" required/></td>
                    </tr>
                        
                    <tr>
                        <td>Aadhar card no:</td>
                        <td><input type="text" name="txtaadhar" value="" required/></td>
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
                        <td>PAN No:</td>
                        <td><input type="text" name="txtpan" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="" value="yes" checked/>Female
                            <input type="radio" name="" value="no" />Male</td>
                    </tr>
                    <tr>
                        <td>Martitial Status:</td>
                        <td><select name="maritial" required>
                                <option>Married</option>
                                <option>Unmarried</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Blood Group:</td>
                        <td><select name="bgroup">
                                <option>A +ve</option>
                                <option>B +ve</option>
                                <option>O +ve</option>
                                <option>A -ve</option>
                                <option>B -ve</option>
                            </select></td>
                    </tr>
                     <tr>
                         <td colspan="2"><input type="submit" value="SAVE" name="btnsave"/></td>
                        
                    </tr>
                    
            </table>

            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
        <?php
//}
// else {
//    header('Location:login.php');
//}

?>
