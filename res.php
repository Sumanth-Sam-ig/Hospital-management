<?php

    include("db.php");

?>


<html>
<head>

<link rel="stylesheet" type="text/css" href="css/tables.css?v=<?php echo time(); ?>">

<style>

    details{

        background-color:rgba(60,160,190);
        padding:5px;
        margin:5px;

    }

    summary{
        padding:5px;
        font-size:20px;
        width:700px;
        height:37px;
    }

    summary:hover:not(.active) {
    background-color: rgba(16, 124, 173, 0.8);
    color:rgb(250,250,250);
    }

    .active {
        background-color: rgba(106, 236, 176,0.3);
    }

    .cl1{

        width:800px;
        position:absolute;
        top:23%;
        left:20%;
        height:auto;
        background-color:rgba(100,160,210);
        border-radius:4px;
    }

    table, th, td {
    border: 1px solid rgb(50,100,150);
    padding:5px;
    height:50px;
}

    tr{

        padding:10px;
        margin:10px;
    }

    th,td{
    font-size:18px;
    margin:4px 4px 4px 10px;
    padding:4px;
    }

    .inform{
        margin:1px 1px 10px 1px;
        position:relative;
        left:10%;
    }

</style>

</head>


<body>



<div class="cl1">
    
    <details>
  <summary > Prescriptions info </summary>


  <?php
    $id=$_SESSION["id"];
    echo $id;
    
        $sq="select appointments.pname,appointments.dname,appointments.date,prescriptions.id ,prescriptions.list from appointments INNER JOIN prescriptions where appointments.prescriptionid=prescriptions.id and appointments.patientid=$id";
        $res=mysqli_query($db,$sq);

        echo "<table id='tabs'>";
        echo "<tr><th> Patient Name </th> <th> Doctor name </th> <th> Date </th><th> Id </th> <th> Prescribed Medicines</th></tr>";

        while($row=mysqli_fetch_row($res))
        {
            echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> </tr>";

        }
        echo "</table>";

  ?>
    
</details>


<details  <?php if(isset($_REQUEST["namecheck"])){ echo "open"; }?> >
   <summary> <div class="inform"><form method="POST"> Doctor Name <input type="text" name="docname"> <input type="submit" name="namecheck" value="sumbit"></form> </div></summary>
   <?php
    
        if(isset($_REQUEST["namecheck"]))
        {
            $name=$_POST["docname"];
            $sq="select appointments.pname,appointments.dname,appointments.date,prescriptions.list from appointments INNER JOIN prescriptions where appointments.prescriptionid=prescriptions.id and dname='$name'";
            $res=mysqli_query($db,$sq);
            
            echo "<table id='tabs'>"; 
            echo "<tr><th> Patient Name </th> <th> Doctor name </th> <th> Date </th> <th> Prescribed Medicines</th></tr>";

            while($row=mysqli_fetch_row($res))
            {
                echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td></tr>";

            }
            echo "</table>";

        }
   
   
   ?>

</details>


<details  <?php if(isset($_REQUEST["pnamecheck"])){ echo "open"; }?> >
   <summary> <div class="inform"><form method="POST"> Patient Name  <input type="text" name="pname"> <input type="submit" name="pnamecheck" value="sumbit"></form> </div></summary>
   <?php
    
        if(isset($_REQUEST["pnamecheck"]))
        {
            $name=$_POST["pname"];
            $sq="select appointments.pname,appointments.dname,appointments.date,prescriptions.list from appointments INNER JOIN prescriptions where appointments.prescriptionid=prescriptions.id and pname='$name'";
            $res=mysqli_query($db,$sq);
            
            echo "<table id='tabs'>"; 
            echo "<tr><th> Patient Name </th> <th> Doctor name </th> <th> Date </th> <th> Prescribed Medicines</th></tr>";

            while($row=mysqli_fetch_row($res))
            {
                echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> </tr>";

            }
            echo "</table>";

        }
   
   
   ?>

</details>

    <details  <?php if(isset($_REQUEST["pcheck"])){ echo "open"; }?> >
   <summary> <div class="inform"><form method="POST"> Delete record  <input type="number" name="pid"> <input type="submit" name="pcheck" value="sumbit"></form> </div></summary>
   <?php
    
        if(isset($_REQUEST["pcheck"]))
        {
            
            $name=$_POST["pid"];
            $sq="select id,list from prescriptions where id=$name";
            $res=mysqli_query($db,$sq);
            
            echo "<table id='tabs'>"; 
            echo "<tr><th> id </th> <th> list </th></tr>";

            while($row=mysqli_fetch_row($res))
            {
                echo "<tr><td>$row[0]</td><td> $row[1] </td></tr>";

            }
            echo "</table>";

            $ds="DELETE FROM `prescriptions` WHERE id=$name";
            $res=mysqli_query($db,$ds);
            if($res){
            echo "<h4 style='background-color:rgb(100,170,220);font-size:18px;'>  Record Deleted </h4>";}
        }
   
   
   ?>

</details>



</div>

</body>

</html>