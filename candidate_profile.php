<?php session_start();

/*if(isset($_SESSION<["username"])&& isset($_SESSION["userid"]))
{
echo  $_SESSION["username"];
echo " ".$_SESSION["userid"];
*/

if (isset($_REQUEST["btnsave"])) {
    $knowme = $_REQUEST["txtmore"];
        $qual = $_REQUEST["qual"];
            $quald = $_REQUEST["quald"];
    $manifesto = $_REQUEST["manifesto"];
     $ambition = $_REQUEST["ambition"];
     $hobby= $_REQUEST["hobby"];
$coact= $_REQUEST["co-act"];
//        $age = $_REQUEST["txtage"];
//    $dob = $_REQUEST["txtdob"];
//    $nationality = $_REQUEST["txtnation"];
//    $crimrec = $_REQUEST["crimrec"];
//    $uid = $_REQUEST["txtaadhar"];
//  
    $reforms = $_REQUEST["reforms"];
    $prospects = $_REQUEST["prospects"];
     $advertise = $_REQUEST["advertise"];
   $email = $_REQUEST["txtemail"];
    $add=$_REQUEST["txtadd"];
    $comment=$_REQUEST["comment"];
    $mobile = $_REQUEST["txtmobile"];
            $gender = $_REQUEST["gender"];
            //    $marital = $_REQUEST["maritial"];
                   //$idno = $_REQUEST["idno"];
//                    $security=$_REQUEST["securityque"];
//                 $sec_ans=$_REQUEST["txtans"];
//                   // $idno = $_REQUEST["txtidno"];

    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
            
            
            
            $qry = "INSERT INTO can_pro2(knowme,past_ref,qual,prospects,
                    adver, email, address, contact, comment,gender,
                    qual_details,manifesto,ambition,hobbies,co_activities)
                    VALUES ('".$knowme."','".$reforms."','".$qual."',
                    '".$prospects."','".$advertise."','".$email."','".$add."',
                    '".$mobile."','".$comment."','".$gender."','".$quald."',
                    '".$manifesto."','".$ambition."','".$hobby."','".$coact."')";

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
        <form action="candidate_profile.php">
            <table border="1">
                <tr>
                        <td>Know me more:</td>
                        <td><textarea name="txtmore" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Qualification</td>
                        <td><select name="qual" required>
                                <option>Bachelor of Engineering</option>
                                <option>MBA</option>
                                <option>MCA</option>
                                <option>BCA</option>
                                <option>B.Com</option
                                 <option>M.Com</option>
                                  <option>BA</option>
                                   <option>MA</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Qualification Details</td>
                        <td><select name="quald" required>
                                <option></option>
                                <option>1sem</option>
                                <option>2sem</option>
                                <option>3sem</option>
                                <option>4sem</option
                                 <option>5sem</option>
                                  <option>6sem</option>
                                   <option>7sem</option>
                                <option>8sem</option>
                            </select></td>
                    </tr>
                
                  
                <tr>
                        <td>Manifesto:</td>
                        <td><textarea name="manifesto" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Ambition:</td>
                        <td><textarea name="ambition" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Areas of interest:</td>
                        <td><textarea name="hobby" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Co-curricular Activities:</td>
                        <td> <select name="co-act" required>
                                <option>Sports</option>
                                <option>Debate</option>
                                <option>Cultural</option>
                                <option>Speech</option>
                                <option>Technical</option>
                            </select></td>
                    </tr>

                    
                    <tr>
                        <td>Past Reforms:</td>
                        <td><textarea name="reforms" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                    <tr>
                        <td>Future Prospects:</td>
                        <td><textarea name="prospects" rows="4" cols="20" required>
                            </textarea></td>
                    </tr>
                
               
                    <tr>
                        <td>Advertisements:</td>
                        <td><textarea name="advertise" rows="4" cols="20" required>
                            </textarea>
                            <input type="file" name="advertise" /></td>
                    </tr>
                                      
                        
                    <tr>
                        <td>Alternate Email:</td>
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
                        <td><input type="radio" name="gender" value="yes" checked />Female
                            <input type="radio" name="gender" value="no" />Male</td>
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
