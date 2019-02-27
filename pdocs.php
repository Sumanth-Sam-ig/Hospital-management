<?php

    include("db.php");

?>


<html>
<head>

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
        border:0px solid green;
        border-radius:4px;
    }

    .cl1{

        width:800px;
        position:absolute;
        top:23%;
        left:20%;
        height:auto;
        border:0px solid blue;
        border-radius:4px;
        background-color:rgba(100,160,210);
    }

    table, th, td {
    border: 1px solid rgb(50,100,150);
    padding:5px;
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
        border-radius:2px;
    }

</style>

</head>


<body>



<div class="cl1">
    
    <details>
  <summary > Doctor info </summary>


  <?php
    
        $sq="select name,desig,intime,outtime from doctors";
        $res=mysqli_query($db,$sq);

        echo "<table>";
        echo "<tr><th> Name </th> <th> Designation </th> <th> In time </th> <th>Out time</th></tr>";

        while($row=mysqli_fetch_row($res))
        {
            echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> </tr>";

        }
        echo "</table>";

  ?>
    
</details>


<details  <?php if(isset($_REQUEST["namecheck"])){ echo "open"; }?> >
   <summary> <div class="inform"><form method="POST"> Doctor name: <input type="text" name="docname"> <input type="submit" name="namecheck" value="sumbit"></form> </div></summary>
   <?php
    
        if(isset($_REQUEST["namecheck"]))
        {
            $name=$_POST["docname"];
            $sq="select name,desig,intime,outtime from doctors where name='$name'";
            $res=mysqli_query($db,$sq);
            
            echo "<table>"; 
            echo "<tr><th> Name </th> <th> Designation </th> <th> In time </th> <th>Out time</th></tr>";

            while($row=mysqli_fetch_row($res))
            {
                echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> </tr>";

            }
            echo "</table>";

        }
   
   
   ?>

</details>


<details <?php if(isset($_REQUEST["timecheck"])){ echo "open"; }?> >
<summary> <div class="inform">  <form method="POST"> Check Available Time : <input type="number" name="time"> <button type="submit" name="timecheck"> check Availability </button></form></div></summary>

         <?php
    
    if(isset($_REQUEST["timecheck"]))
    {
        $time=$_POST["time"];
        $sq="select name,desig,intime,outtime from doctors where intime<$time and outtime>$time";
        $res=mysqli_query($db,$sq);
        
        echo "<table>"; 
        echo "<tr><th> Name </th> <th> Designation </th> <th> In time </th> <th>Out time</th></tr>";

        while($row=mysqli_fetch_row($res))
        {
            echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> </tr>";

        }
        echo "</table>";

    }


?>



</details>


<?php

    include("test.html");

?>

</div>

</body>

</html>