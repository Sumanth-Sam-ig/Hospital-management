<?php

    session_start();

?>


<!doctype html>

<html>
<head>


<link rel="stylesheet" type="text/css" href="css/home1.css?v=<?php echo time(); ?>">

<style>
    body{

        background-image:url(img/healthcare4.jpg),url(img/healthcare7.jpg);
        background-position: left top,center bottom;
        background-repeat: no-repeat;
        
        opacity:0.9;
    }

</style>



</head>
<div class="sti">

    <ul class="c3">
  <li class="c2"><img width="60px" heigth="50px" src="img/logo.png"></li>
  <li><div class="c1">Hospital Management system</div></li>
</ul>

</div>

<?php

    include_once("header3.php");

?>

<?php

    include_once("slides.php");

?>

<br>

<?php

    include_once("text.php");

?>

<?php
                $activity = $_REQUEST['active'];
               
                switch ($activity) {
                    case 'out':
                        unset($_SESSION["user"]);
                        unset($_SESSION["id"]);

                        break;
                    case 'dout':
                        unset($_SESSION["doc"]);
                        break;
                    default:
                        //echo "none selected";
                        break;
                }
            ?>

<body>

</body>

<footer>

        <?php
        
                //include("footer.php");        
        ?>

</footer>


</html>