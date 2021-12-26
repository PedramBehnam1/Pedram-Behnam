
<table align = "center" border="1" cellpadding="5px" cellspacing="3px" style="color:blue; background-color:#f7f5f2;">
    <?php
        $k = 1;
        for($i =1 ; $i<= 9 ; $i++){
            echo "<tr>";
            for($j = 1 ; $j <= 9 ; $j++){
               echo "<td>$k</td>";
               $k++;     
            }
            echo "</tr>";
        }
    ?>
</table>