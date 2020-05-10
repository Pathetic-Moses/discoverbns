<?php

?>
<!DOCTYPE html>
<html>
<head> 
<meta name="GENERATOR" />
<meta http-equiv="refresh" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Transaction Sucessful</title>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=7.0,Transition=19)">


<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid black;
  border-bottom: 16px solid orange;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>


</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader">

<h4>Completing Transfer....</h4>

</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	<p align="center"> <img border="0" src="images/logo.png" width="259" height="85"><br>
</p><br>
<table align="center">
<p align="center"> <img border="0" src="images/sucess.png" align="center" width="50" height="50">  </p>
</table>
<br>
<table width="19%" border="0" align="center">
  <tr> 
    <td bgcolor="#FFFFFF"><div align="center"><FONT FACE="VERDANA" SIZE="2" COLOR="#000000"><B><font color="#FFA500">Congratulations, Grant!<br>You've sucessfully completed your transaction.</font></B> 
        </FONT></div></td>
  </tr>
</table><br>

  <table width="19%" border="0" align="">
    <p bgcolor="#FFFFFF"><div align="center"><FONT FACE="VERDANA" SIZE="2" COLOR="#000000"><font color="#336666">&reg;Thank you for banking with us! 

Your transaction has been processed and your money will be available within two working business days!
<br>
<b>Have a great day&#128525;!</b></font></p>
</table>

<br>
<table width="19%" border="0" align="middle">
  <tr>
   <a href="index.html" <td action="index.html" bgcolor="#FFFFFF"><div align="center"><FONT FACE="VERDANA" SIZE="2" COLOR="#000000"><B><font color="#336666"><u>Logout</u></font></B> 
        </FONT></div></td></a>
  </tr>
</table>
</div>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>