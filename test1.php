<?php
    include("db.php");

header('Content-type: application/json');

        echo "[";
    
        $ans="";
        $sq="select name,desig,intime,outtime from doctors";
        $res=mysqli_query($db,$sq);
        while($row=mysqli_fetch_row($res))
        {
        
            $ans= $ans."{";
            $ans=$ans.'"name":';
            $ans=$ans.'"'.$row[0].'"';
                //echo "<tr><td>$row[0]</td><td> $row[1] </td><td>$row[2]</td> <td>$row[3]</td> </tr>";
            $ans= $ans."},";

        }
        echo substr($ans,0,strlen($ans)-1);

        echo "]";


//echo '[{"name":"John"},{"name":"John"}]';


?>