<!-- Write a PHP program using nested for loop that creates a chess board.

Conditions:

You can use html table having width=”400px” and take “30px” as cell height and width for check boxes. -->

<table width="400px" border="2px solid black">
    <?php
    for($row=0; $row<8; $row++){
        echo "<tr>";
        for($col=0;$col<8;$col++){
            $total=$row+$col;/*if both are even or both are odd then and then only sum is even*/
            if($total%2==0){
            echo "<td width='30px' height='30px' bgcolor=#FFFFFF></td>";
            }
            else{
                echo"<td width='30px' height='30px' bgcolor=#000000></td>";
            }
        }
        echo "<br>";
    }
    echo "</tr>";
    
    
    ?>
</table>