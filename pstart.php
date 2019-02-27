<?php
    include("db.php");
  /*  if ( isset($_REQUEST['fail']) )
    {
        echo "try again";

    }*/
?>

<html>

<link rel="stylesheet" type="text/css" href="css/home1.css?v=<?php echo time(); ?>">


<head>
<title> User SignIn</title>
<style>

    body{

        background-image:url(img/healthcare4.jpg);

    }

</style>
</head>
<body>

    <div class="sti">

<ul class="c3">
<li class="c2"><img width="60px" heigth="50px" src="img/logo.png"></li>
<li><div class="c1">Hospital Management system</div></li>
</ul>

</div>

<?php

include("header3.php");

?>


<?php

    include("plogin.php");
?>

<?php

    if(isset($_SESSION["user"]))
    {
        echo "asdfgh";
        header("location: phome.php?active=home");
    }

    if(isset($_REQUEST["log"]))
    {
        $user=$_POST["user"];
        $pass=hash('md5',$_POST["password"]);

        $s="select id,pass1 from patients where name='$user'";
        
        $result = mysqli_query($db, $s);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_row($result)) 
            {
                $id=$row[0];
                $p=$row[1];
            }    

            if ($p===$pass)
            {
                $_SESSION["user"]=$user;
                $_SESSION["id"]=$id;
    
                header("location: phome.php?active=home");
            }
            else{
    
                include("wrongpass.html");
    
            }

        }
         else {
                    include("notauser.html");
                }

        

      
        
    }
    

    if(isset($_REQUEST["sign"]))
    {
        $user=$_POST["user"];
        $pass=hash('md5',$_POST["password"]);
        $r=1;
        $phone=$_POST["phone"];
        $email=$_POST["mail"];
        $address=$_POST["address"];


        $query = "Select Max(id) From patients";
	    $returnD = mysqli_query($db,$query);
	    $res = mysqli_fetch_assoc($returnD);
	    $maxRows = $res['Max(id)'];
	    if(empty($maxRows)){
            $lastRow = $maxRows = 1000;      
        }else{
		    $lastRow = $maxRows + 1 ;
         }


        $s="insert into patients (`id`, `name`, `phone`, `email`, `address`, `pass1`) values($lastRow,'$user',$phone,'$email','$address','$pass')"; 
        $result = mysqli_query($db, $s);
        
         if($result)
         {
            header("location: phome.php?active=home");

         }
         else{

            header("location: pstart.php?fail=true");
         }
        
    }

    

?>


</body>
</html>





