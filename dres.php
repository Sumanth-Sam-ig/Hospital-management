<?php

    include("db.php");
    session_start();

?>


<html>
<head>

<link rel="stylesheet" type="text/css" href="css/tables.css?v=<?php echo time(); ?>">

<style>

    details{

        background-color:rgba(70,170,200);
        padding:5px;
        margin:5px;

    }

    summary{
        padding:5px;
        font-size:20px;
        width:900px;
        height:37px;
        border:1px solid green;
        border-radius:5px;
        background-color:rgba(60,120,170);
    }

    summary:hover:not(.active) {
    background-color: rgba(16, 124, 173, 0.8);
    color:rgb(250,250,250);
    }

    .active {
        background-color: rgba(106, 236, 176,0.3);
    }

    .cl1{

        width:1000px;
        position:absolute;
        top:23%;
        left:13%;
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
  <summary > Patients info </summary>


  <?php
    
        $id=$_SESSION["doc"];
        
        $sq="select pname,date,analysis, from appointments where doctorid=$id and status=1";
        $sq1="select appointments.pname,appointments.date,appointments.analysis,prescriptions.list from appointments INNER JOIN prescriptions where appointments.prescriptionid=prescriptions.id and appointments.doctorid=$id";
        $res=mysqli_query($db,$sq1);

        echo "<table id='tabs'>";
        echo "<tr><th> Patient Name </th> <th> Date </th> <th> analysis </th> <th> Prescribed medication  </th> </tr>";

        while($row=mysqli_fetch_row($res))
        {
            echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td><td>$row[3]</td> </tr>";

        }
        echo "</table>";

  ?>
    
</details>




<details  <?php if(isset($_REQUEST["pnamecheck"])){ echo "open"; }?> >
   <summary> <div class="inform"><form method="POST"> Patient Name  <input type="text" name="pname"> <input type="submit" name="pnamecheck" value="sumbit"></form> </div></summary>
   <?php
    
        if(isset($_REQUEST["pnamecheck"]))
        {
            $name=$_POST["pname"];
            $sq="select pname,date,analysis from appointments where doctorid=$id and status=1 and pname='$name'";
            $res=mysqli_query($db,$sq);
            
            echo "<table id='tabs'>"; 
            echo "<tr><th> Patient Name </th> <th> Date </th> <th> analysis </th></tr>";

            while($row=mysqli_fetch_row($res))
            {
                echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td>  </tr>";

            }
            echo "</table>";

        }
   
   
   ?>

</details>




</div>

</body>

</html>