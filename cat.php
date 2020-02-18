<?php session_start();
 $con = mysql_connect("localhost", "root", "") or dir("cant connect");
            mysql_select_db("vv", $con);
   
if(isset($_REQUEST["clg"]))
{
    if($_REQUEST["post"]=="p")
    {
              $clg=$_REQUEST["clg"];
    
    //echo $status;

                      $qry="SELECT * FROM candidate_profile WHERE post='President' and college='".$clg."'";
                     echo $qry;
        
        $result=mysql_query($qry,$con);

       $row = mysql_fetch_array($result);
      //   $result=mysql_query($qry,$con);
        
       
         echo" <div id='main'>";
    
 echo"  <div id='inner' style='margin-right:25px;'>";

 
 
echo "<h2>".$row['name']."</h2>";
 
echo "<h2>".$row['college']."</h2>";
echo "<img src='uploads/".$row['']."' height=200 width=200>";

//echo "<img src='images/3.jpg' width='250' height='250'>";
echo " <a href='#'>Read more</a>";
echo "</div>";
 
echo "</div>";
 
 
 
 
 
         echo"<table class='tab'>";
        echo "<tr>
         <td>Name</td>
         <td>Description</td>
         <td>Price</td>
         <td>Purpose</td>
         <td>Duration</td>
         <td>Uploaded by</td>
                  <td>Photo</td>
                           <td>GET</td>
         </tr>";

       echo "<tr> 
            <td>".$row['name']."</td>
            <td>".$row['college']."</td>
            <td>".$row['post']."</td>
            <td>".$row['candidate_id_no']."</td>
      <td>";
        $qryu="SELECT cusername FROM user where cid='".$row['uid']."'";
        
        $resultu=  mysql_query($qryu, $con);
        $rowu=  mysql_fetch_array($resultu);
        echo $rowu["cusername"];
                        echo"</td>
       </tr>";
        
        echo "</table>";
        
     }
}
     





?>














<!DocType>
<html>
<head>
<title></title>
<style type ="text/css">
*
{
padding:0;
margin:0;
}


body
{
margin-top:40px;
}


#header
{
width:100%;
height:40px;
background-color:black;
 position:fixed;
 top:0;
 left:0;
 right:0;
 z-index:9999999999999999999999999;
 }

 
#headerinner
{
width:960px;
height:40px;
margin:0 auto;

}

.companyname
{
color:#f2f2f2;
position:relative;
top:10px;
float:left;
}

.companyname:hover,#cpyrt:hover
{
color:white;
cursor:pointer;
}

#menu
{
width:400px;
height:40px;
float:right;
}

#menu ul
{
list-style-type:none;
}

#menu ul li a
{
text-decoration:none;
color:#f2f2f2;
}

#menu ul li
{
float:left;
margin:10px;
}

#menu ul li :hover
{
border-bottom:2px solid white;
}
#mainheader
{
width:100%;
height:300px;
background-color:#eeeeee;
}
#mainheaderinner
{
width:960px;
height:300px;
margin:0 auto;

}

#mainheaderinner h2
{
font-size:70px;

}
#mainheaderinner p
{
text-align:justify;
font-size:25px;
}
#mainheaderinner a
{
background-color:#336699;
color:#ffffff;
padding:10px 16px;
text-decoration:none;
font-size:18px;
border-radius:6px;
position:relative;
top:20px;
}

#mainheaderinner a:hover,#inner a:hover{
background-color:#337ab7;
}


#main
{
width:960px;
height:390px;
margin:0 auto;
background-color:white;

}

#inner{
width:300px;
position: relative;
top:200px;
height:390px;
float:left;
border: 1px solid black;
background-color:white;
}

#inner a
{
background-color:#336699;
color:#ffffff;
padding:10px 16px;
text-decoration:none;
font-size:18px;
border-radius:6px;

position:relative;
top:30px;
left:95px;

}
 
#inner h2,h3{
background-color:#336699;
border-bottom:1px solid black;
color:white;
text-align:center;}

#inner img{

border:2px solid black;
margin-top:30px;
margin-left:20px;
}

#cpyrt{
width:100%;
height:25px;
background-color:black;
float:left;
color:#ffffff;
text-align:center;
margin-top:20px;
}


</style>
</head>

<body>
<div id="header">
     <div id="headerinner">
	 <p class="companyname"> Feasible Research & Teachnologies Pvt Ltd</p>
    <div id="menu">
	<ul>
	 <li><a href='#' style="color:black;border-bottom:0;background-color:white;padding:5px;cursor:default;">Home</a></li>
	 <li><a href='#'>About</a></li>
	 <li><a href='#'>Profile</a></li>
	 <li><a href='#'>Gallery</a></li>
	 <li><a href='#'>Contact</a></li>
	 </ul>
	</div>
   </div>
 </div>
<!--   <div id="main">
      <div id="inner" style="
margin-right:25px;"> 

       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=p'>
                 
       <img src="images/p.jpg" width="250" height="250">
   <a href='#'>Read more</a>
                  
</a>
                
                 
   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   <div id="inner"> 
  <h2>Research</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style="
margin-right:25px;"> 
         <h2>IT Education</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   <div id="inner"> 
  <h2>Research</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style="
margin-right:25px;"> 
         <h2>IT Education</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   <div id="inner"> 
  <h2>Research</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style="
margin-right:25px;"> 
         <h2>IT Education</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   <div id="inner"> 
  <h2>Research</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style="
margin-right:25px;"> 
         <h2>IT Education</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   <div id="inner"> 
  <h2>Research</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style="
margin-right:25px;"> 
         <h2>IT Education</h2>
         <h3>POST</h3>		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>

   </div>
   <div id="inner" style=" 
margin-right:26px;"> <h2>IT Solutions</h2>
		 <img src="Images/3.jpg" width="250" height="250">
         <a href='#'>Read more</a>
 </div>
   </div>
  -->
   <div id="cpyrt">Copyright &#xa9; Feasible 2016
  </div>
  </body>
</html>