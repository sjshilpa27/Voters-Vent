<?php session_start();

/*if(isset($_SESSION<["username"])&& isset($_SESSION["userid"]))
{
echo  $_SESSION["username"];
echo " ".$_SESSION["userid"];
*/

if (isset($_REQUEST["btnsave"])) {
    $cid = $_REQUEST["txtid"];
        $username = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
    $name = $_REQUEST["txtname"];
//        $age = $_REQUEST["txtage"];
    $dob = $_REQUEST["txtdob"];
    $nationality = $_REQUEST["txtnation"];
    $crimrec = $_REQUEST["crimrec"];
    $uid = $_REQUEST["txtaadhar"];
  
    $prposers = $_REQUEST["txtproposers"];
    $post = $_REQUEST["txtpost"];
   $email = $_REQUEST["txtemail"];
    $add=$_REQUEST["txtadd"];
    $mobile = $_REQUEST["txtmobile"];
            $gender = $_REQUEST["gender"];
            //    $marital = $_REQUEST["maritial"];
                   $idno = $_REQUEST["idno"];
//                    $security=$_REQUEST["securityque"];
//                 $sec_ans=$_REQUEST["txtans"];
//                   // $idno = $_REQUEST["txtidno"];

    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
            
            
            
            $qry = "INSERT INTO candidate_profile( cid, username, password,
                name,dob, nationality, criminal_record ,uid,
               proposers,post, email, p_address,gender, 
               time,candidate_id_no,mobileno,security_que,security_ans) 
               VALUES ('".$cid."','".$username."','".$pass."','".$name."',
                     '".$dob."','".$nationality."','".$crimrec."','".$uid."',
                   '".$prposers."','".$post."','".$email."','".$add."','".$gender."',
                    now(),'".$idno."','".$mobile."')";


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
        <form action="candidate_regis.php">
            <table border="1">
                <tr>
                        <td>Candidate id:</td>
                        <td><input type="text" name="txtid" readonly value="cn<?php      $con = mysql_connect("localhost", "root", "") or die("Sorry! Cannot Connect");
        mysql_select_db("vv", $con);
$qry1="SELECT MAX(CAST(SUBSTRING(cid,3) AS unsigned)) AS maxid FROM candidate_profile";
        mysql_query($qry1, $con);
   //     echo $qry1;
               $result=mysql_query($qry1,$con);
             $row = mysql_fetch_array($result);
        $id=$row["maxid"]+1;
  echo $id ?>" /></td>
                    </tr>
                    
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" value="" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" value="" /></td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="txtname" value="" required /></td>
                    </tr>
                    <tr>
                        <td>DOB:</td>
                        <td><input type="text" name="txtdob" value="" required/></td>
                    </tr>
                                       <tr>
                        <td>Nationality:</td>
                        <td><input type="text" name="txtnation" value="" required/></td>
                    <tr>
                        <td>Any Criminal Record:</td>
                        <td><input type="radio" name="crimrec" value="yes" checked/>Yes
                            <input type="radio" name="crimrec" value="No"/>No</td>
                    </tr>
                    <tr>
                        <td>Aadhar card no:</td>
                        <td><input type="text" name="txtaadhar" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Proposers:</td>
                        <td><input type="text" name="txtproposers" value="" /></td>
                    </tr>
                    <tr>
                        <td>Oath taken:</td>
                        <td><input type="radio" name="oath" value="yes" checked/>Yes
                            <input type="radio" name="oath" value="no" />No</td>
                    </tr>
<!--                    <tr>
                        <td>Election type:</td>
                        <td><input type="text" name="txtelec" value="" /></td>
                    </tr>
                    <tr>-->
                        <td>Post</td>
                        <td><input type="text" name="txtpost" value="" required /></td>
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
                        <td><input type="text" name="txtmobile" value="" required/></td>
                    </tr>                                    
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="yes" checked="checked"/>Female
                            <input type="radio" name="gender" value="no" />Male</td>
                    </tr>
<!--                                        <tr>
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
                            
                    </tr>-->
  <tr>
                        <td colspan="2"><input type="submit" value="SAVE" name="btnsave"/></td>
                        
                    </tr>
                  
            </table>

            
        </form>
        </body>
</html>

     