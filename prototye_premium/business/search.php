<?php 
    include '../data-access/promotionClass.php';

    if(isset($_POST["search"])){

        $obj = new promotion(NULL,$_POST["nom"]);
        $res = $obj->search();

        $rows = [];

        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $rows[] = $row;
            }
        }
        echo json_encode($rows);
    }
?>
 
