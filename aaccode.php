<? php
	
?>

<!DOCTYPE html>
<html>
<head> 
<meta name="GENERATOR" />
<meta http-equiv="refresh" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AAC code</title>
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

<h2>Transferring....</h2>

</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
	<p align="center"> <img border="0" src="images/logo.png" width="259" height="85"><br>
</p><br><form>
		<table align="center">
          <tr> 
        <td width="36%"><font color="#336666" size="2" face="Arial"><b>
			Please Enter your AAC Code:</b></font><font color="#800000" size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;</font></td>
            <td width="64%"><font face="Arial" size="2"> 
              <input type="text" name="aaccode" size="26" style="background-color: #EEF1FB">
              </font></td>
          </tr></table>
		  
		  <table align="center">
		  <td align="center">&nbsp; <input type="button" onclick="check(this.form)" value="Continue transfer"> &nbsp;</td>
		   </table>
	</form>
		   
		     <script language="javascript"> 
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.aaccode.value == "winpin252326") {
                    window.open('2ndconfirmation.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("You've entered a wrong AAC Code please contact your account officer.")/*displays error message*/
                }
            }
        </script>
		   
	  <table width="19%" border="0" align="">
    <p bgcolor="#FFFFFF"><div align="center"><FONT FACE="VERDANA" SIZE="2" COLOR="#000000"><font color="#336666">Contact your account officer if youve not been issued
	with Account Authorization Charge Code.</font></p>
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