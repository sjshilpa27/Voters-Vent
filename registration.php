<?php session_start();
 if(isset($_REQUEST["btnregister"]))
 {
             $name=$_REQUEST["txtname"];
              $age=$_REQUEST["txtage"];
               $confirmpass=$_REQUEST["txtconfirmpassword"];
               $pass=$_REQUEST["txtpassword"];
      
               $email=$_REQUEST["txtemail"];
 $user=$_REQUEST["txtuser"];
             
     $age=$_REQUEST["txtage"];
 $dob=$_REQUEST["txtdob"];
 $gen=$_REQUEST["gen"];
 $dob=$_REQUEST["txtdob"];
 
     
     
             $nat=$_REQUEST["txtnat"];
              $phno=$_REQUEST["txtphno"];
               $adh=$_REQUEST["txtadh"];
                $vin=$_REQUEST["txtvin"];
     $vid=$_REQUEST["txtvid"];

 
               if($pass==$confirmpass)
               {
                   
                   $con=  mysql_connect("localhost","root","") or die("Sorry! Cannot Connect");
                   mysql_select_db("vv",$con);
                   
                   $qry="INSERT INTO voter_registration (vid,vname,vage,vdob,vphno,vadhaar,vvin,vemail,vnationality,vgender,vusername,password,time) "
                           . "VALUES('".$vid."','".$name."','".$age."','".$dob.",'".$phno."','".$adh."','".$vin."','".$email."','".$nat."','".$gen."','".$user."'','".$pass."'',now())";
                   mysql_query($qry,$con);
                   echo $qry;
                   echo"Data Saved!";
               }
                else 
                    {
                    echo"Password and Confirm Password did not match!";
                    }
               
 }
     
        ?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            *
            {
                padding:0;
                margin:0;
            }
            #registration
            {
                width:340px;
                margin:0 auto;
                border:1px solid #336699;
                box-shadow:1px 1px 17px #336699;
            }
            #registration h2
            {
                text-align: center;
                background-color:#336699;
                color:#ffffff;
            }
            #registration td
            {
            padding:3px;    
            }
            .formbutton
            {
                background-color:#336699;
                padding:5px;
                color:#ffffff;
                border:0;
                width:130px;
            }
            .formbutton:hover
            {
                cursor:pointer;
            }
            .username
            {
                background-image:url('images/user.png');
                background-repeat:no-repeat;
                border:1px solid #000000;
                padding-left:20px;
                padding-bottom:3px;
                padding-top:3px;
            }
            .email
            {
                background-image:url('images/download.png');
                background-repeat:no-repeat;
                padding-left:20px;
                padding-bottom:3px;
                padding-top:3px;
              border:1px solid #000000;
            }
            .password
            {
                background-image:url('images/pass.png');
                background-repeat:no-repeat;
                padding-left:20px;
                padding-bottom:3px;
               padding-top:3px;
               border:1px solid #000000;
            }
        </style>
    </head>
    <body>
        <div id="registration">
            <h2>Sign Up:</h2> 
        <form name="RegistrationForm" action="registration.php" method="POST">
            <table cellspacing="0" cellpadding="0" align="center">
                
                
                
                     <tr>
                    <td>VoterId:</td>
                    <td><input type="text" name="txtvid" readonly value="us<?php      $con = mysql_connect("localhost", "root", "") or die("Sorry! Cannot Connect");
        mysql_select_db("vv", $con);
$qry1="SELECT MAX(CAST(SUBSTRING(vid,3) AS unsigned)) AS maxid FROM voter_registration";
        mysql_query($qry1, $con);
   //     echo $qry1;
               $result=mysql_query($qry1,$con);
             $row = mysql_fetch_array($result);
        $vid=$row["maxid"]+1;
  echo $vid ?>" /></td>
                </tr>


                
                
                <tr>
                    <td>Voter's Name:</td>
                    <td>
                        <input required type="text" class="username" name="txtname" value="" placeholder="Enter name">
                    </td>
                </tr>         

                 <tr>
                    <td>Age</td>
                    <td>
                        <input type="text" class="email" name="txtage" required value="" placeholder="Enter Ag">
                    </td>
                </tr>         
 
               
                 <tr>
                    <td>DOB</td>
                    <td>
                        <input type="date" class="email" name="txtdob" required value="" placeholder="Enter Ag">
                    </td>
                </tr>         
 
                
                
                 <tr>
                    <td>Nationality</td>
                    <td>
                        <input type="text" class="email" name="txtnat" required value="Indian" >
                    </td>
                </tr>         
                <tr>
                    <td>Contact Number</td>
                    <td>
                        <input type="text" class="email" name="txtphno" required value="" placeholder="Enter Contact Number">
                    </td>
                </tr>         
 
               <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" class="email" name="txtemail" required value="" placeholder="Enter Email">
                    </td>
                </tr>         
 
                 <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" checked name="gen" required>Female
                             <input type="radio" name="gen" required>Male    
                        </td>
                    </tr>
                
                    
                
                 <tr>
                    <td>Adhaar Number</td>
                    <td>
                        <input type="text" class="email" name="txtadh" required value="" placeholder="Enter Adhaar Number">
                    </td>
                </tr>         
 
                
                 <tr>
                    <td>Voter Id card's Number</td>
                    <td>
                        <input type="text" class="email" name="txtvin" required value="" placeholder="Enter Adhaar Number">
                    </td>
                </tr>         
 
                 <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" class="email" name="txtuser" required value="" placeholder="Enter Username">
                    </td>
                </tr>         
 
                    
                    
                    
               <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" class="password" name="txtpassword" value="" required placeholder="Enter Password">
                    </td>
                </tr>         
              
                <tr>
                    <td>Confirm Password:</td>
                    <td>
                        <input type="password" class="password" name="txtconfirmpassword" value="" required placeholder="Confirm Password">
                    </td>
                </tr>         
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" class="formbutton" name="btnregister" value="Register">
                    </td>
                </tr>
                
                
                
            </table> 
        </form>    
      
        </div>
       
        </body>
</html>
