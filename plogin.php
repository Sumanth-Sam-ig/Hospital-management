<?php 

?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/logcss.css?v=<?php echo time(); ?>">
    </head>
   
<div class="maincolor">
    <form class="forms" align="center" method="POST" >
        <div align="center"  style="margin:1px;padding:6px;background-color:rgba(150,200,240,0.8);border-radius:7px;margin:3px;color:rgb(50,130,190);"> <strong> User </strong></div>
        <input class="qs" required pattern="[A-Za-z0-9].{6,}" placeholder="User Name"  type="text" id="user" name="user">
        <br><input class="qs" required pattern="[A-Za-z0-9].{6,}" placeholder="Password" type="password" id="pass1" name="password" >
        <br><button class="bu" style="background-color:rgb(50,160,170);width:100px;" type="submit" id="log" name="log">  Log In  </button>
        <br><input class="qs" pattern="[A-Za-z0-9].{8,}" placeholder="Confirm Password" type="password" id="pass2" name="pass2">
        <br><input type="text" pattern="[0-9]{10}" placeholder="Phone no." class="qs" id="phone" name="phone" >
        <br><input type="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder=" Email " class="qs" id="mail" name="mail" >
        <br><input type="text" pattern="[A-Za-z0-9].{1,}" placeholder="Address" class="qs" id="address" name="address" >
        
        <br><button class="bu" name="sign" id="sign" style="background-color:rgb(50,160,170);width:100px;" type="submit"> Sign Up  </button>
    </form>
    <script type="text/javascript" src="js/test.js" ></script>
</div>

</html>



