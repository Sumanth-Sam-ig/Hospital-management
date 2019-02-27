<?php 

?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/logcss.css?v=<?php echo time(); ?>">
    </head>
   
<div class="maincolor">
    <form class="forms" align="center" method="POST" >

        <div align="center"  style="margin:1px;padding:6px;background-color:rgba(150,200,240,0.8);border-radius:7px;margin:3px;color:rgb(50,130,190);"> <strong> Doctor </strong></div>
        <input class="qs" required pattern="[0-9]{5}" placeholder="Doctor Id"  type="text" id="user" name="user">
        <br><input class="qs" required pattern="[A-Za-z0-9].{6,}" placeholder="Password" type="password" id="pass1" name="password" >
        <br><button class="bu" style="background-color:rgb(50,160,170);width:100px;" type="submit" id="log" name="log">  Log In  </button>
        
        </form>
    <script type="text/javascript" src="js/test1.js" ></script>
</div>

</html>



