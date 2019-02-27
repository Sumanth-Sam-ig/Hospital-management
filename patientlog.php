<?php

?>
<!doctype html>
<html>

<link rel="stylesheet" type="text/css" href="css/logcss.css">


<div class="maincolor" >
    
    <form class="forms" align="center"  >
        <div align="center"  style="margin:1px;padding:6px;background-color:rgba(150,200,240,0.8);border-radius:7px;margin:3px;color:rgb(50,130,190);"> <strong> User </strong></div>
        <input class="qs" required pattern="[A-Za-z0-9].{6,}" placeholder="User Name"  type="text" id="user" name="user">
        <br><input class="qs" required pattern="[A-Za-z0-9].{8,}" placeholder="Password" type="password" id="pass1" name="password" >
        <br><button class="bu" style="background-color:rgb(50,160,170);width:100px;" type="submit" id="log" name="log">  Log In  </button>
        <br><input class="qs" pattern="[A-Za-z0-9].{8,}" placeholder="Confirm Password" type="password" id="pass2" name="pass2">
        <br><input type="text" pattern="[0-9]{10}" placeholder="Phone no." class="qs" id="phone" name="phone" >
        <br><input type="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder=" Email " class="qs" id="mail" name="mail" >
        <br><input type="text" pattern="[A-Za-z0-9].{6,}" placeholder="Address" class="qs" id="address" name="address" >
        
        <br><button class="bu" name="sign" id="sign" style="background-color:rgb(50,160,170);width:100px;" type="submit"> Sign Up  </button>
    </form>
<br>
    
</div>
</html>
<!--
<script>
var i=10;

function getval()
{
	var d=new Date();	
	var usercheck=/^[a-zA-Z0-9]{6,20}$/i;
	var passcheck=/^[a-zA-Z0-9]{8,20}$/i ;
	var phonecheck=/^[0-9]{10}$/i ;
	var user=document.getElementById("user").value;
	var pass1=document.getElementById("pass1").value;
	var pass2=document.getElementById("pass2").value;
	var phone1=document.getElementById("phone").value;
	var phone=parseInt(phone1);

	document.getElementById("pass2").value=pass1;
	
	if(!usercheck.test(user))
	{
		document.getElementById("user").style.color="red";
        document.getElementById("pass1").style.color="red";
		document.getElementById("pass2").style.color="red";
		document.getElementById("phone").style.color="rgb(0,30,250)";
		document.getElementById("mail").style.color="rgb(0,50,250)";
		document.getElementById("address").style.color="rgb(0,50,250)";
		
        
	}
	else{
		document.getElementById("user").style.color="rgb(50,150,30)";
		if(!(passcheck.test(pass1)))
		{
			document.getElementById("pass1").style.color="red";
			document.getElementById("pass2").style.color="red";
			document.getElementById("phone").style.color="rgb(200,0,25)";
			document.getElementById("mail").style.color="rgb(0,50,250)";
			document.getElementById("address").style.color="rgb(0,50,250)";
	
		}
		else{
			document.getElementById("pass1").style.color="rgb(30,90,250)";
			document.getElementById("pass2").style.color="rgb(30,90,250)";
            document.getElementById("phone").style.color="rgb(200,50,20)";
			document.getElementById("mail").style.color="rgb(0,50,250)";
			document.getElementById("address").style.color="rgb(0,50,250)";

			if(phonecheck.test(phone)){
				document.getElementById("phone").style.color="rgb(0,50,250)";
			}

		}
	}
	
}

var time=setInterval(getval,200);

</script>
-->

