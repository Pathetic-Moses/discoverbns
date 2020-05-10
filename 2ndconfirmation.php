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
<title>2/3 Confirmed</title>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=7.0,Transition=19)">

<style>
progress[value] {
  /* Reset the default appearance */
  -webkit-appearance: none;
   appearance: none;

  width: 250px;
  height: 20px;
  
   background-color: #eee;
  border-radius: 2px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
}

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

<h2>Transferring....</h2>

</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	<p align="center"> <img border="0" src="images/logo.png" width="259" height="85"><br>
</p><br><form>
		<table align="center">
          <tr> 
        <td width="36%"><font color="#336666" size="2" face="Arial"><b>
			Please Enter the  Given AVC Code:</b></font><font color="#800000" size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
            <td width="64%"><font face="Arial" size="2"> 
              <input type="text" name="avccode" size="26" style="background-color: #EEF1FB">
              </font></td>
          </tr></table>
		  
		  <table align="center">
		  <td align="center">&nbsp; <input type="button" onclick="check(this.form)" value="Continue transfer"> &nbsp;</td>
		   </table>
	</form>
		   
		     <script language="javascript"> 
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.avccode.value == "blueballs69!") {
                    window.open('3ndconfirmation.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("You've entered a wrong AVC Code please contact your account officer.")/*displays error message*/
                }
            }
        </script>
		   <table align="right">
    <p style="width:80%" align="" data-value="80">60% completed</p>
        <progress max="100" align="center" value="60" class="html5">
            <!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
            <div class="progress-bar" align="center">
                <span style="width: 80%">80%</span>
            </div>
        </progress>
</table>

  <table width="19%" border="0" align="">
    <p bgcolor="#FFFFFF"><div align="center"><FONT FACE="VERDANA" SIZE="2" COLOR="#000000"><font color="#336666">Contact your account officer if youve not been issued
	with Account Verification Charge Code.</font></p>
	  </table>
	  
	  <table width="19%" border="0" align="center">
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