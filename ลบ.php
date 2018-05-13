  <?php
    require 'conectfromlost.php';


    $lost_id = $_GET['lost_id'];

    $p = "SELECT * FROM meslost  INNER JOIN typeitem ON lostitem.lost_id=meslost.mes_id   WHERE lost_id='$lost_id' "; 

    

    $result = mysqli_query($dbcon, $q);
    $rowmes = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>


    <!DOCTYPE HTML>
<html>
   <table>
    <td>
    รหัสของหาย  :  <?php echo $rowmes ['message']; ?>
  </td>

</table>

        
             <?php

              
               mysqli_free_result($result);
               mysqli_close($dbcon);
             ?>
             





</html>