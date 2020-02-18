<?php session_start();
/*if(isset($_SESSION<["username"])&& isset($_SESSION["userid"]))
{
echo  $_SESSION["username"];
echo " ".$_SESSION["userid"];
*/

if (isset($_REQUEST["btnsave"])) {
    $knowme = $_REQUEST["txtmore"];
  $ambition = $_REQUEST["ambition"];
     $hobby= $_REQUEST["hobby"];

    
    $qual = $_REQUEST["qual"];
            $quald = $_REQUEST["quald"];
            $qualinfo = $_REQUEST["qualinfo"];
   $art = $_REQUEST["art"];
            $exp = $_REQUEST["exp"];
   $others = $_REQUEST["others"];
            $sport = $_REQUEST["sport"];
   $cultural = $_REQUEST["cultural"];
            $exp = $_REQUEST["exp"];
   
            $whyme = $_REQUEST["whyme"];
//$coact= $_REQUEST["co-act"];
//        $age = $_REQUEST["txtage"];
//    $dob = $_REQUEST["txtdob"];
//    $nationality = $_REQUEST["txtnation"];
//    $crimrec = $_REQUEST["crimrec"];
//    $uid = $_REQUEST["txtaadhar"];
//  
    $reforms = $_REQUEST["reforms"];
    $prospects = $_REQUEST["prospects"];
  //   $advertise = $_REQUEST["advertise"];
   $email1 = $_REQUEST["txtemail1"];
   $email2 = $_REQUEST["txtemail2"];
   $email3 = $_REQUEST["txtemail3"];
   $email4 = $_REQUEST["txtemail4"];
   
 
   
//   $add=$_REQUEST["txtadd"];
  //  $comment=$_REQUEST["comment"];
   // $mobile = $_REQUEST["txtmobile"];
     //       $gender = $_REQUEST["gender"];
            //    $marital = $_REQUEST["maritial"];
                   //$idno = $_REQUEST["idno"];
//                    $security=$_REQUEST["securityque"];
//                 $sec_ans=$_REQUEST["txtans"];
//                   // $idno = $_REQUEST["txtidno"];
   
    $source_file = $_FILES["upfile"]["tmp_name"];
        $target_file = "uploads/" . $_FILES["upfile"]["name"];
        (move_uploaded_file($source_file, $target_file));
            $imagename = $_FILES["upfile"]["name"];
             $imagename1 = $_FILES["upfile"]["name"];
            
            

    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
            
            
            
            $qry = "INSERT INTO can_pro2(ambition,hobby,knowme,qual,quald,qualinfo,art,exp,sport,others,cultural,past_ref,prospects,
                    whyme, email1,email2,email3,email4,time)
                    VALUES ('".$ambition."','".$hobby."','".$knowme."','".$qual."','".$quald."','".$qualinfo."',
                        '".$art."','".$exp."','".$sport."','".$others."','".$cultural."','".$reforms."',
                    '".$prospects."','".$whyme."','".$email1."','".$email2."','".$email3."','".$email4."',now())";

echo $qry;
            if (mysql_query($qry, $con)) {
                echo"Data Saved Successfully";
            } else {
                echo "Error" . mysql_error();
            }
 }

       ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Responsive Tabs</title>
  <meta name="description" content="Responsive tabbed layout component built with some CSS3 and JavaScript">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
  
<header class="o-header">
  <nav class="o-header-nav">
    <a href="http://callmenick.com/_development/angular/intro-to-angular/" class="o-header-nav__link"><i class="fa fa-arrow-left"></i> Previous Demo</a>
    <a href="http://callmenick.com/post/simple-responsive-tabs-javascript-css" class="o-header-nav__link">Back To Article <i class="fa fa-star"></i></a>
  </nav>
  <div class="o-container">
    <h1 class="o-header__title">My Profile</h1>
  </div>
</header>

<main class="o-main">
  <div class="o-container">
   
    <div class="o-section">
        <div id="tabs" class="c-tabs no-js">
  
            <div class="c-tabs-nav">
          <a href="#" class="c-tabs-nav__link is-active">
            <i class="fa fa-plus"></i>
            <span>Know Me More</span>
          </a>
          <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-book"></i>
            <span>Qualifications</span>
          </a>
          <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-trophy"></i>
            <span>Co-curricular Activities</span>
          </a>

            <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-certificate"></i>
            <span>Past Reforms</span>
          </a>
          <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-calendar"></i>
            <span>Future Prospects</span>
          </a>
          <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-heart"></i>
            <span>Why me?</span>
          </a>

            <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-connectdevelop"></i>
            <span>Contact Me</span>
          </a>
          
            
            <a href="#" class="c-tabs-nav__link">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
          </a>
        </div>

  
            <div class="c-tab is-active">
   <form action="tabindex.php">
 <table border="0">

                <div class="c-tab__content">
            
                    <h2>About Me</h2>
                        <td>My Ambition in life</td>
                        <p>My Election ID</p>
                        <p>Profile PIc</p>
                        <p>PArty</p>

                        <tr>
           
                    <td><textarea name="ambition" value="And more details are.." rows="2" cols="119">
                            </textarea></td>
                    </tr>
                                 <td>My Hobbies</td>

                    <tr>
           
                    <td><textarea name="hobby" value="And more details are.." rows="3" cols="119">
                            </textarea></td>
                    </tr>
                        <td>More About Me</td>

                    <tr>
            
                    <td><textarea name="txtmore" value="And more details are.." rows="5" cols="119">
                            </textarea></td>
                    </tr>
                
                </div>
       </table>
      
                </div>

            <div class="c-tab">
 
                <div class="c-tab__content">
            <h2>Educational Qualifications</h2>
              
              
                              <tr>
                        <td>Currently pursuing</td>
                        <td><select name="qual" required>
                                <option>-Course-</option>
                        
                                <option>BE</option>
                                   <option>ME</option>
                                   <option>B.Tech</option>
                                   <option>M.Tech</option>
                                   <option>MBBS</option>
                                 
                                   <option>BBA</option>
                                
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
                        <td><select name="quald" required>
                                <option>-Semester-</option>
                                <option>Completed</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option
                                 <option>5</option>
                                  <option>6</option>
                                   <option>7</option>
                                <option>8</option>
                                <option>Other</option>
  
                            </select></td>
                    </tr>
                    <br>
                    <br>
                        <td>A little more information</td>

                <tr>
                    <td><textarea name="qualinfo" value="And more details are.." rows="10" cols="110">
                            </textarea></td>
                    </tr>
                    <br>
          </div>
            </table>
                </div>
         <div class="c-tab">
          <div class="c-tab__content">
            <h2>Co-Curricular That Interests Me</h2>
            <p> Kindly put in the genuine information.You can also upload the proofs of your achievements</p>   
          
            <td>Articulate Matters</td>
            <tr>
                        <td><textarea name="art" rows="3" cols="110">
                            </textarea></td>
                              <input type="file" name="artimg" /></td>
        </tr>
        <br>
        <br>
            <td>Innovation/Experience</td>
            <tr>
                        <td><textarea name="exp" rows="3" cols="110">
                            </textarea></td>
                              <input type="file" name="expimg" /></td>
        </tr>
        <br>
        <br>
        
        <td>Sports</td>
            <tr>
                        <td><textarea name="sport" rows="3" cols="110">
                            </textarea></td>
                              <input type="file" name="sportimg" /></td>
        </tr>
        <br>
        <br>
         
        <td>Cultural</td>
            <tr>
                        <td><textarea name="cultural" rows="3" cols="110">
                            </textarea></td>
                              <input type="file" name="culturalimg" /></td>
        </tr>
        <br>
        <br>
        <td>Others</td>
            <tr>
                        <td><textarea name="others" rows="3" cols="110">
                            </textarea></td>
                              <input type="file" name="othersimg" /></td>
        </tr>
                 
          </div>
        </div>
        <div class="c-tab">
          <div class="c-tab__content">
            <h2>Major Reforms By Me</h2>
              
            <tr>
                        <td><textarea name="reforms" rows="7" cols="110">
                            </textarea></td>
                              <input type="file" name="ref1img" /></td>
                  <input type="file" name="ref2img" /></td>

          </tr>
                 
          
             </div>
        </div>

                  <div class="c-tab">
          <div class="c-tab__content">
            <h2>My Proposals As A Public Servant</h2>
              
            <tr>
                        <td><textarea name="prospects" rows="10" cols="110">
                            </textarea></td>
                              <input type="file" name="pro1img" /></td>
                  <input type="file" name="pro2img" /></td>

          </tr>
                 
          </div>
        </div>
        <div class="c-tab">
          <div class="c-tab__content">
            <h2>Why Should I Be Your Choice?</h2>
              
            <tr>
                        <td><textarea name="whyme" rows="12" cols="110">
                            </textarea></td>
                              <input type="file" name="why1img" /></td>
                  <input type="file" name="why2img" /></td>
     |
          </tr>
          </div>
        </div>

          <div class="c-tab">
          <div class="c-tab__content">
            <h2>Ping Me On</h2>
              
          
                        <tr>
                        <td>Facebook</td>
                        <td><input type="email" name="txtemail1" value="" /></td>
                        </tr> <br>
 <tr>
                        <td>Twitter</td>
                        <td><input type="email" name="txtemail2" value="" /></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Google</td>
                        <td><input type="email" name="txtemail3" value="" /></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Other References</td>
                        <td><input type="email" name="txtemail4" value="" /></td>
                    </tr>
                    
          </div>
        </div>
          
         
            
            <div class="c-tab">
          <div class="c-tab__content">
            <h2>Account Settings</h2>
            <h4><u><a href="changepw.php">Change Password</a></u></h4>
            <h4><u><a href="deleteacc.php">Delete My Account</a></u></h4>
          
                         </div>
        </div>
          
          <div class="c-tab">
          <div class="c-tab__content">
            <h2>Change It Up</h2>
            <p>Books ipsum dolor sit amet, consectetur adipisicing elit.</p>
              
          
                <tr>
                        <td><textarea name="qual" rows="20" cols="110">
                            </textarea></td>
                    </tr>
          </div>
        </div>
          
          <div class="c-tab">
          <div class="c-tab__content">
            <h2>Change It Up</h2>
            <p>Books ipsum dolor sit amet, consectetur adipisicing elit.</p>
              
          
                <tr>
                        <td><textarea name="qual" rows="20" cols="110">
                            </textarea></td>
                    </tr>
          </div>
        </div>
          
                <tr>
                <td colspan="4"><input type="submit" value="SAVE" name="btnsave" /></td>
                <td colspan="4"><input type="reset" value="RESET" name="btnreset" /></td>
                        
                    </tr>
          </table>
              </form>

      </div>
    </div>

    <div class="o-section">
      <div id="github-icons"></div>
    </div>
  </div>
</main>

<footer class="o-footer">
  <div class="o-container">
    <small>&copy; 2015, callmenick.com</small>
  </div>
</footer>

<script src="js/src/tabs.js"></script>
<script>
  var myTabs = tabs({
    el: '#tabs',
    tabNavigationLinks: '.c-tabs-nav__link',
    tabContentContainers: '.c-tab'
  });

  myTabs.init();
</script>

<!-- EXTERNAL SCRIPTS FOR CALLMENICK.COM, PLEASE DO NOT INCLUDE -->
<script src="js/lib/githubicons.js"></script>
<script src="js/lib/carbonad.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-34160351-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- /EXTERNAL SCRIPTS -->

</body>
</html>