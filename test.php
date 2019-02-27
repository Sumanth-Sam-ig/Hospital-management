
<?php
	session_start();
	include("dbConfig.php");
	error_reporting(0);

?>



<!DOCTYPE html>
<html>
	<head>
		<title> Centralized Troop management and Deployment System</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/title.css">
		<link rel="stylesheet" type="text/css" href="css/inputs.css">
		<link rel="stylesheet" type="text/css" href="css/form.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<?php include("header.php"); ?>
			</div>

            <div class="content">
				<?php
                //mainlogin page
                    include("plogin.html");
				?>

			</div>

            <?php
				//client LOGIN...
                header("location: home.php?activity=dashboard");
					if(isset($_REQUEST['adminLoginBtn'])==1){
		
						$username= $_REQUEST['username'];
						$pwd= $_REQUEST['pwd'];

						if(!empty($username) && !empty($pwd)){

                            if($username=='demo'){
                                header("location: home.php?activity=dashboard");
						    	$errorMsg = "Invalid User....";
							}
							if($username=='nda'){
                                header("location: h1.php?activity=dashboard");
						    	$errorMsg = "Invalid User....";
							}
							if($username=='drdo'){
                                header("location: h2.php?activity=dashboard");
						    	$errorMsg = "Invalid User....";
							}
							if($username=='cgov'){
                                header("location: h3.php?activity=dashboard");
						    	$errorMsg = "Invalid User....";
							}

                        }
                            
						else{
							include("mainlogin.php");
							$errorMsg = "Enter in empty field...";
						}
						
					}

				?>


			<div class="footer">
				<?php include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>



