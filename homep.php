<?php

    include("db.php");

?>


<html>
<head>

<style>

    .pop{
            position:absolute;
            top:10%;
            left:20%;
            background-color:rgb(100,180,220);
            font-size:19px;
            color:white;
    }

    .qs{

        padding:5px;
        margin:5px;
        width:250px;

    }

    .cl1{

        width:720px;
        position:relative;
        left:10%;
        border:0px solid blue;
        border-radius:4px;
        height:auto;
        text-align:center;
        background-color:rgba(100,160,210);
    }

    .cl2{

        padding:10px;
        margin:5px;
        position:relative;
        border:0px solid blue;
        border-radius:4px;
        left:20%;
        width:500px;
        background-color:rgb(100,180,200);

    }

    .pop{
            position:absolute;
            top:60%;
            left:47%;
            background-color:rgb(100,180,220);
            font-size:19px;
            color:white;
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

    .mk1{

        background-color:rgb(60,140,170);
        opacity:0.9;
        margin:20px;
        border:0px solid blue;
        border-radius:4px;
        height:500px;
        width:900px;
        position:relative;
        left:20%;
    }

</style>

</head>


<body>

<div class="mk1">
<div class="cl1">
    <h3 > My Records </h3>
</div>

<div class="cl2">
<?php
    
    $id=$_SESSION["id"];
    $sq="select pname,dname,time,date,status from appointments where patientid=$id order by time";
    $res=mysqli_query($db,$sq);
    echo "$id";
    
    echo "<table>"; 
    echo "<tr><th> Patient Name </th> <th> Doctor name </th> <th> time </th> <th> date</th> <th> Status </th> </tr>";

    $c=0;

    while($row=mysqli_fetch_row($res))
    {
        echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> ";
        if($row[4]==1)
        {
            echo "<td> resolved </td></tr>";
        }
        else{

            echo "<td> pending </td></tr>";
        }
        $c=1;
    }
    echo "</table>";
    echo "</div>";
    

?>


</div>

<?php

if($c==0)
{
    echo "<div class='pop'> No Previous Appointments </div>";

}

?>
</body>

</html>