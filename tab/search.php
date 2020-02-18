<?php session_start();
/*if(isset($_SESSION<["username"])&& isset($_SESSION["userid"]))
{
echo  $_SESSION["username"];
echo " ".$_SESSION["userid"];
*/
//if(isset($_SESSION["cid"]))
//{
    $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
$qry="SELECT * FROM can_pro2 WHERE cid='c110'";
       
//$qry="SELECT * FROM can_pro2 WHERE cid='".$cid."'";
                     echo $qry;
    $result=mysql_query($qry,$con);
    $row = mysql_fetch_array($result);
    

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

  <style>
      
                .it 
            {
                border:0px solid #000000;
                background:transparent;
                
            }
  
      
  </style>


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
                <form action="search.php">
 <table border="0">

                <div class="c-tab__content">
            
                    <h2>About Me</h2>
                    <td><u>My Ambition in life</u></td>
                            <p><u>My Election ID</u></p>
                <p><u>Profile PIc</u></p>
                <p><u>PArty</u></p>

                        <tr>
                  
                            <td><p name="ambition"  class="it" rows="2" cols="119">  
                    <?php
                                  echo $row["ambition"];
                    ?>
                                                     
                                </p></td>
                    </tr>
                    <td><u>My Hobbies</u></td>

                    <tr>
           
                    <td><p name="hobby" class="it"  rows="3" cols="119">
                    <?php
                                  echo $row["hobby"];
                    ?>
            
                        
                          </p></td>
                    </tr>
                    <td><u>More About Me</u></td>

                    <tr>
            
                    <td><p name="txtmore" class="it" value="And more details are.." rows="5" cols="119">
                                <?php
                                  echo $row["knowme"];
                    ?>
               
                        </p></td>
                    </tr>
                
                </div>
       </table>
      
                </div>

            <div class="c-tab">
 
                <div class="c-tab__content">
            <h2>Educational Qualifications</h2>
              
              
                              <tr class="it">
                        <td class="it">Currently pursuing &nbsp&nbsp</td>
                    <td><p name="qual"  class="it">
                                    <?php
                         
                           echo $row["qual"];
                    
                                   ?>
                                   </p></td>
                    </tr>
                    <tr>
                        <td><p class="it" name="quald" class="it" > 
                                    <?php
                         
                           echo $row["quald"];
                    
                                   ?>
                                   </p></td>
                    </tr>
                    <br>
                    <br>
                        <td>A little more information</td>

                <tr>
                    <td><p name="qualinfo" class="it" value="And more details are.." rows="10" cols="110">
                                 <?php
                                  echo $row["qualinfo"];
                    ?>
                        </p></td>
                    </tr>
                    <br><br>
          </div>
            </table>
                </div>
         <div class="c-tab">
          <div class="c-tab__content">
            <h2>Co-Curricular That Interests Me</h2>
            <p> Kindly put in the genuine information.You can also upload the proofs of your achievements</p>   
          
            <td>Articulate Matters</td>
            <tr>
                        <td><p name="art" class="it" rows="3" cols="110">
                                 <?php
                                  echo $row["art"];
                    ?>
               
                            </p></td>
                              <input type="file" name="artimg" class="it" /></td>
        </tr>
        <br>
        <br>
            <td>Innovation/Experience</td>
            <tr>
                        <td><textarea name="exp" rows="3" cols="110">
                               <?php
                                  echo $row["exp"];
                    ?>
               
                            </textarea></td>
                              <input type="file" name="expimg" /></td>
        </tr>
        <br>
        <br>
        
        <td>Sports</td>
            <tr>
                        <td><textarea name="sport" rows="3" cols="110">
                                 <?php
                                  echo $row["sport"];
                    ?>
               
                            </textarea></td>
                              <input type="file" name="sportimg" /></td>
        </tr>
        <br>
        <br>
         
        <td>Cultural</td>
            <tr>
                        <td><textarea name="cultural" rows="3" cols="110">
                                <?php
                                  echo $row["cultural"];
                    ?>
                </textarea></td>
                              <input type="file" name="culturalimg" /></td>
        </tr>
        <br>
        <br>
        <td>Others</td>
            <tr>
                        <td><textarea name="others" rows="3" cols="110">
     <?php
                                  echo $row["others"];
                    ?>
               
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
                                 <?php
                                  echo $row["past_ref"];
                    ?>
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
                                 <?php
                                  echo $row["prospects"];
                    ?>
               
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
                                 <?php
                                  echo $row["whyme"];
                    ?>
               
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
                        <td><input type="email" name="txtemail1"  
                                    <?php
                         
                           echo "value='".$row["email1"]."'";
                    
                                   ?>
                                   /></td>
                        </tr> <br>
 <tr>
                        <td>Twitter</td>
                        <td><input type="email" name="txtemail2"  
                                    <?php
                         
                           echo "value='".$row["email2"]."'";
                    
                                   ?>
                                   /></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Google</td>
                        <td><input type="email" name="txtemail3"  
                                    <?php
                         
                           echo "value='".$row["email3"]."'";
                    
                                   ?>
                                   /></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Other References</td>
                        <td><input type="email" name="txtemail4"  class="it"
                                    <?php
                         
                           echo "value='".$row["email4"]."'";
                    
                                   ?>
                                   /></td>
                    </tr>
                    
          </div>
        </div>
          
         
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