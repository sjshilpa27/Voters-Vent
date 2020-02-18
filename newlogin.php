<!Doctype>
<html>
<head>
<title> </title>
<style type="text/css">
*
{
padding:0;
margin:0;
}
#header 
{
width:100%;
height:40px;
background-color:#000000;
}
#headerinner
{
width:960px;
height:40px;
margin:0 auto;
}
.compn
{
color:#f2f2f2;
position:relative;
top:10px;
//float:left;
}
.compn:hover
{
color:red;
cursor:pointer;
}
#menu
{
width:400px;
height:40px;
//float:right;
}
#menu ul
{
list-style-type:none;

}
#menu ul li a
{
text-decoration:none;
color:f2f2f2;

}
#menu ul li
{
float:left;
margin:10px;
}
#menu ul li:hover
{
border-bottom:2px solid #ffffff;
}

</style>
</head>
<body>
<div id="header">
	<div id="headerinner">
<!--	<p class="compn">Feasible Research and Technologies Pvt Ltd</p>-->
	<div id="menu">
		<ul>
                 <li><a href="login.php?status=authority">Authority</a></li>
<!--			<li><a href="#"style="color:#000000;background-color:#ffffff;padding:5px;cursor:default;">About</a></li>-->
<li><a href="login.php?status=candidate">Candidate</a></li>
<li><a href="login.php?status=voter">Voter</a></li>
			 <a href='search.php?clg=<?php echo $_REQUEST["clg"];?>&post=p'>
		</ul>
	</div>
	</div>
</div>

</body>
</html>
