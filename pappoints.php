<?php

    include("db.php");

?>


<html>
<head>

<style>

    .qs{

        padding:5px;
        margin:5px;
        width:250px;

    }

    .cl1{

        width:1100px;
        position:relative;
        left:10%;
        height:auto;
        background-color:rgba(100,160,210);
    }

    .cl2{

        padding:10px;
        margin:5px;
        position:relative;
        left:20%;
    }

    .pop{
            position:absolute;
            top:60%;
            left:47%;
            background-color:rgb(100,180,220);
            font-size:19px;
            color:white;
    }

</style>

</head>


<body>

<div class="cl1">
    <h3 >Add New Appointments </h3>
<div class="cl2">

    <form method="POST">

        Name : <input class="qs" type="text" name="aname"><br>
        Date : <input class="qs" type="date" name="adate"><br>
        Time : <input class="qs" type="number" name="atime"><br>
        Doctor Name: <select class="qs" type="text" name="dname">
            <?php
            
                $s="select name,desig from doctors";
                $res=mysqli_query($db,$s);
                while($row=mysqli_fetch_row($res))
                {
                    $q=$row[0];
                    echo "<option value='$q'> $q,$row[1]</option>";

                }

            ?>
        <input type="submit" name="done1">
        </select>

    </form>


</div>

</div>


<?php

    if(isset($_REQUEST["done1"])){

        $pid=$_SESSION["id"];
        $dname=$_POST["dname"];
        $pname=$_POST["aname"];
        $time=$_POST["atime"];
        $date=(string)$_POST["adate"];
        echo "$date";
        $sq1="select id from doctors where name='$dname'";
        $did=mysqli_fetch_row(mysqli_query($db,$sq1))[0];
        $v=0;
        $sq2="INSERT INTO appointments (`patientid`, `doctorid`, `pname`, `dname`, `time`, `date`,`status`) VALUES ($pid,$did,'$pname','$dname',$time,'$date',$v)";
        $r2=mysqli_query($db,$sq2);
        if($r2){

            echo "<div class='pop'> Appointmented Added Sucessfuly </div>";

        }
        else{
            $e=mysqli_error($db);
            echo "<div class='pop'> $e </div>";
        }

    
    }


?>


</body>

</html>