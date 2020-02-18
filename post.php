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

#main
{
width:960px;
height:390px;
margin:0 auto;
background-color:white;

}

#inner{
width:250px;

height:250px;
float:left;
border: 0px solid black;
}

#inner h2,h3{
background-color:#336699;
border-bottom:0px solid black;
color:white;
text-align:center;}

#inner img{

border:10px solid black;
margin-top:50px;
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
   
   <div id="main">
    
   <div id="inner" style="
margin-right:25px;"> 

       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=p'>
                 
       <img src="images/p.jpg" width="250" height="250">
               
</a>
                
                 
   </div>
   <div id="inner" style=" 
margin-right:26px; "> 
       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=s'>

       <img src="images/s.jpg" width="250" height="250">
</a>
       </div>
   <div id="inner"> 
       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=cr'>

		 <img src="images/cr.jpg" width="250" height="250" >
       </a>
   </div>
   <div id="inner" style="
margin-right:25px;"> 
       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=vp'>

		 <img src="images/vp.jpg" width="250" height="250" style="position:relative; top:25px;">
       </a>
   </div>
   <div id="inner" style=" 
margin-right:26px;"> 
       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=js'>

       <img src="images/js.jpg" width="250" height="250" style="position:relative; top:25px;">
       </a>
       </div>
   <div id="inner">
       <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=all'>

       <img src="Images/3.jpg" width="250" height="250" style="position:relative; top:25px;">
       </a>
   </div>
   </div>
    <br><br><br><br><br><br><br><br><br><br>  
<tr>
                        <td colspan='2'>
                            <input type='text' value='<?php echo $_REQUEST["clg"];?>' name='txtclg' hidden >
                        </td>
                    </tr>
   
  </body>
</html>