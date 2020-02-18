
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



.header {
  width: 100%;
  height:80px;
  font-size: 30px;
}



.outer {
/*//  border-bottom: 5px solid #15e1af;*/
  /*background-color: red;*/
  width: 1350px;
  height:400px;
  text-align: center;
/*//line-height: 50px;*/
  cursor: pointer;
  color: white;
  font-size: 30px;
position:relative;
    top:100px;
    left:0px;
float:left;
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


.social {
/*//  border-bottom: 5px solid black;
//  background-color: white;*/
  width: 50px;
  height: 300px;
  text-align: right;
/*//line-height: 00px;*/
  cursor: pointer;
  color: white;
  font-size: 30px;
/*//margin-top:150px; */
  position: relative;
  top:0px;
  right: 0;
float:right;
}


.slider {
/*//  border-bottom: 5px solid black;
//  background-color: white;*/
  width: 100%;
  height:300px;
  text-align: center;
/*//line-height: 00px;*/
  cursor: pointer;
  color: white;
  font-size: 30px;
/*//margin-top:150px; */
  position: relative;
  bottom:50px;
  right: 0;
}



.log {
   
  width: 100px;
  height:50px;
  text-align: center;
//line-height: 00px;
  cursor: pointer;
  font-size: 30px;
margin-top:100px;
border-radius: 80%,80%;
  position: relative;
  bottom:50px;
  right: 0;
//float: right;
}

/*             *
            {
                padding:0;
                margin:0;
            }
            body
            {
                background-color: black;
                background:url('images/image.png');
                background-repeat: no-repeat;
                background-size: 650px 700px;
                margin-left: 200px;
            }*/
            .pic{
                position: relative;
                    top:80px;
                left:350px;
                
                
            }
.window{
height: 768px;
background-color: black;            
}

</style>
    <link rel="stylesheet" href="lib/jquery-nicemodal-1.0/jquery-nicemodal.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="window">
        <div class="pic">
        <img src="images/imag.jpg" alt="HTML Map" border="0" usemap="#html" height="650px" width="650px"/>
        
        <map name="html">
            <area shape="circle" coords="154,150,59" href="registration.php" alt="Team" target="_self" />
            <area shape="circle" coords="0,3,10,15" href="registration.php" alt="Team" target="_self" />
<!--            <area shape="poly" data-url="nextpg.php" id="demo" coords="311,308,315,307,322,308,328,309,336,306,340,307,347,302,349,302,351,304,354,307,361,310,362,313,362,319,367,325,365,332,353,340,349,343,349,348,339,362,332,363,325,364,323,368,322,377,323,383,328,390,312,383,309,384,314,394,311,409,299,419,295,427,290,427,279,417,273,405,282,397,286,397,287,391,279,385,283,377,281,362,289,350,298,335,308,334,321,317,320,314,311,303" href="registration.php?status=cg" alt="Team" target="_self"  />-->
            <area shape="poly" coords="243,237,249,239,251,240,250,239,255,243,259,245,258,248,257,251,258,251,255,256,249,261,245,262,240,270,241,271,239,274,237,276,237,280,237,289,241,289,243,290,246,292,249,245,253,292,254,288,247,280,250,205,248,276,251,266,252,272,257,275,262,273,267,277,278,272,285,281,291,277,296,283,307,278,318,287,331,289,331,301,290,343,288,352,283,356,273,351,265,250,255,346,242,349,232,347,219,348,215,341,204,342,195,351,185,351,182,344,172,346,156,338,152,329,145,330,145,318,154,314,155,309,163,305,158,301,167,297,168,288,166,277,170,278,178,268,178,277,187,278,184,285,178,295,188,295,193,288,203,289,208,291,210,287,214,283,211,275,221,271,224,263,298,265,206,255,220,248,236,243,245,237,243,237" href="main1.php?status=mp" alt="Team" target="_self"  />
            <area shape="poly" coords="283,356,273,351,265,250,255,346,242,349,232,347,219,348,215,341,204,342,195,351,185,351,182,344,172,346,156,338,152,329,145,330,137,335,148,339,137,345,139,352,144,359,128,356,128,363,116,365,111,372,110,381,114,391,109,402,113,410,113,425,115,440,118,455,125,457,132,458,136,441,147,439,153,433,168,436,168,426,184,430,190,422,197,419,200,414,205,411,212,408,217,404,272,409,274,398,273,297,284,399,286,292,278,384,280,381,277,276,283,377,281,368,283,357" href="registration.php?status=mh" alt="Team" target="_self"  />
            <area shape="poly" coords="212,408,217,404,272,409,298,427,306,424,314,423,315,413,320,414,323,420,327,417,331,417,331,412,337,410,340,404,348,404,353,409,360,408,369,405,354,420,340,430,333,436,322,440,258,483,260,494,60,506,263,514,250,420,243,517,245,518,238,522,230,522,222,529,219,534,211,528,221,519,214,508,210,505,201,505,196,503,189,506,194,501,198,500,203,496,194,493,189,493,187,486,190,479,195,479,192,467,196,457,205,460,206,448,206,438,204,432,210,428,205,424,210,413,212,408" href="registration.php?status=ap" alt="Team" target="_self"  />
            <area shape="poly" coords="311,308,315,307,322,308,328,309,336,306,340,307,347,302,349,302,351,304,354,307,361,310,362,313,362,319,367,325,365,332,353,340,349,343,349,348,339,362,332,363,325,364,323,368,322,377,323,383,328,390,312,383,309,384,314,394,311,409,299,419,295,427,290,427,279,417,273,405,282,397,286,397,287,391,279,385,283,377,281,362,289,350,298,335,308,334,321,317,320,314,311,303" href="registration.php?status=" alt="Team" target="_self"  />
            
            
            283,356,273,351,265,250,255,346,242,349,232,347,219,348,215,341,204,342,195,351,185,351,182,344,172,346,156,338,152,329,145,330
          <div class='log'>
              <area shape="poly" data-url="nextpg.php" id="demo" coords="311,308,315,307,322,308,328,309,336,306,340,307,347,302,349,302,351,304,354,307,361,310,362,313,362,319,367,325,365,332,353,340,349,343,349,348,339,362,332,363,325,364,323,368,322,377,323,383,328,390,312,383,309,384,314,394,311,409,299,419,295,427,290,427,279,417,273,405,282,397,286,397,287,391,279,385,283,377,281,362,289,350,298,335,308,334,321,317,320,314,311,303" href="nextpg.php?status=cg"   />
<!--  alt="Team" target="_self"-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/jquery-nicemodal-1.0/jquery-nicemodal.js"></script>
<script>
$(function(){

    $('area#demo').nicemodal({
        width: '500px',
        keyCodeToClose: 27,
        defaultCloseButton: true,
        closeOnClickOverlay: true,
        closeOnDblClickOverlay: false,
        // onOpenModal: function(){
        //     alert('Opened');
        // },
        // onCloseModal: function(){
        //     alert('Closed');
        // }
    });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

          </div>
        </div>
        </div>
        </body>
</html>
<!--<a href="home.php"></a>-->