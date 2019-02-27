<?php

    include("db.php");

?>



<html>
<head>

<script src="js/meds.js">

</script>

<style>

    .qs{

        padding:5px;
        margin:5px;
        width:250px;
        border:1px solid green;
        background-color:rgba(240,250,250,0.9);

    }

    .cl1{

        width:900px;
        position:relative;
        left:13%;
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
            top:24%;
            left:47%;
            background-color:rgb(100,180,220);
            font-size:19px;
            color:white;

    }

</style>

</head>


<body>

<div class="cl1">
    <h3 >Add New Prescription </h3>
<div class="cl2">

        Medicine Keyword :<input type="text" class="qs" onkeyup="showHint1(this.value)" > <br>
        Medicine Name : <div  id="txtHint"> </div>
        
        <button name="addlist" type="button" onclick="addlist()" style="margin:10px;padding:10px;background-color:rgb(100,160,219);" >add to list </button><br>

        Medicine list :
        <input type="text" id="test" name="meds" disabled style="width:400px;height:100px;" ><br>
<form method="POST">
        Name : <input class="qs" type="text" name="pname"><br>
        Patient Id : <input class="qs" type="number" name="pid"><br>
        Analysis:<br><textarea class="qs"  name="analysis" style="height:50px;border:1px solid green;width:60%"></textarea><br>
        Medicines :<br> <textarea class="qs" name="mlists" style="height:50px;border:1px solid green;width:60%"></textarea><br>
        <input type="submit" style="background-color:rgb(100,160,220);width:300px;position:relative;padding:10px;margin:10px;left:10%;" name="medsub" value="Create Prescription ">
</form>
    
</div>

</div>





<?php
echo "test";

 

    if(isset($_REQUEST["medsub"])){


        $meds=$_REQUEST["mlists"];
$query = "Select Max(id) From prescriptions";
$returnD = mysqli_query($db,$query);
$res = mysqli_fetch_assoc($returnD);
$maxRows = $res['Max(id)'];
if(empty($maxRows)){
    $lastRow = $maxRows = 100;      
}else{
    $lastRow = $maxRows + 1 ;
 }

 $mp="INSERT INTO `prescriptions`(`id`, `list`) VALUES ($lastRow,' $meds')";
 $r5=mysqli_query($db,$mp);

 
        $pid=$_REQUEST["pid"];
        $pname=$_REQUEST["pname"];
        $did=$_SESSION["doc"];
        $analysis=$_REQUEST["analysis"];
        
        
        //$sq1="select id from doctors where name='$dname'";
        //$did=mysqli_fetch_row(mysqli_query($db,$sq1))[0];
        //$v=0;
        $sq="UPDATE `appointments` SET `analysis`='$analysis' WHERE patientid=$pid and status=0 ";
        $sq1="UPDATE `appointments` SET `status`=1 WHERE patientid=$pid and status=0 ";
        $sq3="UPDATE `appointments` SET `prescriptionid`=$lastRow WHERE patientid=$pid and status=0 ";
        $r2=mysqli_query($db,$sq);
        if($r2){

            echo "<div class='pop'> prescription Added Sucessfuly </div>";

        }
        else{
            $e=mysqli_error($db);
            echo "<div class='pop'> $e </div>";
        }
        $r3=mysqli_query($db,$sq3);
        $r4=mysqli_query($db,$sq1);

        
    }
    


?>


</body>

</html>