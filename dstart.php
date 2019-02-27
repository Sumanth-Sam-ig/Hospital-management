<?php
    include("db.php");
    session_start();
?>

<html>

<link rel="stylesheet" type="text/css" href="css/home1.css?v=<?php echo time(); ?>">
<head>
<title> Doctor SignIn</title>
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

    include("dlogin.php");
?>

<?php

    if(isset( $_SESSION["doc"]))
    {
        echo "test";
        header("location: dhome.php?active=home");
    }

    if(isset($_REQUEST["log"]))
    {
        $id=$_POST["user"];

        $s="select id from doctors where id=$id";
        
        $result = mysqli_query($db, $s);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_row($result))
         {
            $p=$row[0];
         }
         if ($p===$id)
         {
             $_SESSION["doc"]=$id;
             header("location: dhome.php?active=home");
         }
         else{
                include("notauser.html");

         }
        }
        else {
                    include("notauser.html") ;
                    }
  
        
    }
    

?>


</body>
</html>





