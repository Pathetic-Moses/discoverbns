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
<title>Transfer Money</title>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=7.0,Transition=19)">
</head>

<body>

	<p align="center"> <img border="0" src="images/logo.png" width="259" height="85"><br>
</p>


<table border="0" cellpadding="6" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="100%" class="AutoNumber4" height="">
        <tr>
          
    <td width="100%" height="19" valign="top" bordercolor="#EEF1FB" bgcolor="#EEF1FB"> 
      <b><FONT FACE="VERDANA" SIZE="3" COLOR="#336666">Transfer Money to other account</FONT></b></td>
        </tr>
        <tr></table>


<form method="POST">
  <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Bank Name:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="dbn" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
          
    <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Bank Branch:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="dbb" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
     
         <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Bank City:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="dbc" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
         
             <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Bank Swift Code:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="dbsc" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
          
              <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Account Name Holder:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="danh" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
          
              <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Destination Account Number:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="dan" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
          
              <label for=""><font color="#336666" size="2" face="Verdana, Arial, Helvetica, sans-serif">
			Amount:</font></label><br>
              <td width="64%"><font face="Arial" size="2">
				<input type="text" name="amt" size="40" style="background-color: #EEF1FB">
              </font></td>
          </tr><br>
           <br>
          <td align="left">&nbsp; <input type="button" onclick="check(this.form)" value="Transfer"> &nbsp;</td>
          
          </table>
        <p>&nbsp; <img border="0" src="images/connect.gif" align="right" width="134" height="57"></p>
</form>
 
				  
		        <script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.dbn.value == '' && form.dbb.value == '' && form.dbc.value == '' && form.dbsc.value == '' && form.danh.value == '' && form.dan.value == '' && form.amt.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.dbn.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.dbb.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.dbc.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.dbsc.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.danh.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.dan.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
				else if (form.amt.value == '') {
                    alert("All credentials are required to process your transfer.")/*displays error message*/
                }
                else {
                    window.open('aaccode.php')/*opens the target page while Id & password matches*/
                }
            }
        </script>
		  

</body>
</html>