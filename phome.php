<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/head3.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="css/home1.css?v=<?php echo time(); ?>">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

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
    include("pheader.php");
?>
    
<div>
    <?php
                $activity = $_REQUEST['active'];

                switch ($activity) {

                    case 'home':
                        include("homep.php");
                        break;
                    case 'appoints':
                        include("pappoints.php");
                        break;
                    case 'res':
                        include("res.php");
                        break;
                    case'docs':
                        include("pdocs.php");
                        break;
                    default:
                        echo "none selected";
                        break;
                }
            ?>

</div>

 
</body>

</html>