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
        left:15%;
        width:600px;
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
        width:1000px;
        position:relative;
        left:12%;
    }

    #tabs {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

    #tabs td, #tabs th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tabs tr:nth-child(even){background-color: #f2f2f2;}

    #tabs tr:hover {background-color: rgba(100,160,250);}

    #tabs th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgba(60,100,160,0.8);
        color: white;
    }

    .num{
        padding:10px;
        margin:10px;
        color:rgb(200,200,230);
        font-family:verdana;
        background-color:rgba(20,50,100);
    }   

</style>

</head>


<body>

<div class="mk1">
<div class="cl1">
    <h3 > Todays Appointments </h3>
</div>

<div class="cl2">
<?php
    $count=0;
    $id=$_SESSION["doc"];

    $sq1="select count(pname) from appointments where doctorid=$id and status=0";
    $res1=mysqli_query($db,$sq1);
    while($row=mysqli_fetch_row($res1))
    {
        echo "<div class='num'> Number of Patients are ".$row[0]."</div>";
    }


    $sq="select pname,time,date from appointments where doctorid=$id and status=0 order by time";
    $res=mysqli_query($db,$sq);
    
    
    echo "<table id='tabs'>"; 
    echo "<tr><th> Patient Name </th> <th> time </th> <th> date</th></tr>";

    $c=0;

    while($row=mysqli_fetch_row($res))
    {
        $count=$count+1;
        echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td>  </tr>";
        $c=1;
    }
    echo "</table>";
    echo "</div>";
    

?>


</div>

<?php

if($c==0)
{
    echo "<div class='pop'> No Appointments </div>";

}

?>
</body>

</html>