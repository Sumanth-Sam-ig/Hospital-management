<html>
<head>
<style>

    body{

        background-image:url(img/healthcare7.jpg);
        opacity:0.86;
        /*background-size: 1600px 1000px;*/
        background-repeat:no-repeat;
    }
</style>

</head>

<body>

<?php
    include("dheader.php");
?>
    
<div>
    <?php
                $activity = $_REQUEST['active'];

                switch ($activity) {

                    case 'home':
                        include("homed.php");
                        break;
                    case 'res':
                        include("dres.php");
                        break;
                    case'dmeds':
                        include("dmeds.php");
                        break;
                    default:
                        echo "none selected";
                        break;
                }
            ?>

</div>

 
</body>

</html>