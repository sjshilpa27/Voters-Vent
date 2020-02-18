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
        <style type="text/css">
*{
  padding: 0;
  margin: 0;
}


body {
  font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
  color: #F2F2F2;
  
/* // background:url('uploads/d.jpg');*/
  height: 100%;
  width: 100%;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}


.menu {
  border-bottom: 5px solid #15e1af;
  background-color: #54EFC9;
  width: 50px;
  height: 400px;
  text-align: center;
/*line-height: 50px;*/
  cursor: pointer;
  color: white;
  font-size: 30px;
/* //margin-top:50px; */
float:left;
}

.header {
  width: 100%;
  height:80px;
  font-size: 30px;
}

  #window{
position: relative;
top: 100px;
margin: 0 auto;
    background-size: cover;
    width: 880px;
    height:880px ;
    background-position: center;
        background-repeat: no-repeat;
        border-radius:10px;
        text-align:center; 
        
}

#new
{
   width: 200px;
  height:200px;
 // text-align: center;
//line-height: 00px;
 
  margin: 0 auto;
   
}
new:hover
{
    
}
</style>








    </head>
    <body>
     
        <div class="header">
<?php        include 'ind.php';
?>
        </div>

            <div id="window">
                <div style="float:none;" >
            <div id="new" style="float:left;"><a href="../search.php?status=">
                    <img src="images/images.png" height="180" width="180"></a></div>
                <div id="new"  ><a href="../search.php?status=">
                        <img src="images/download.png" height="180" width="180"></a></div>
                    </div>
                <div style="float:none;" >
                <div id="new" style="float:left;"><a href="../search.php?status=">
                        <img src="images/download1.png" height="180" width="180"></a></div>
            
                
                </div>
        </div>
            
            
            
       


        <?php
        // put your code here
        ?>
    </body>
</html>
