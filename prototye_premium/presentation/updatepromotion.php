<?php include '../data-access/conn.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0
    ,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <form action="../business/update.php" method="POST">
        <?php
        $select_query = "SELECT * FROM promotion WHERE id_promotion = " . $_GET["edit_id"];
        $select_res = $conn->query($select_query);
        if ($select_res->num_rows > 0) {
            while ($row = $select_res->fetch_assoc()) {
        ?>
            <div class="hero">
                <div style="display:flex;">
                <input type="text" name="nom" value="<?php echo $row["nom"]; ?>"  style="height: 30px; margin-top:150px;margin-left:500px;">
                <input type="hidden" name="id_promotion" value="<?php echo $row["id_promotion"] ?>">
                <input type="submit" value="Submit" name="update_prom"  style="height: 30px; margin-top:150px;margin-left:20px;"> 
                </div>
            </div>
        <?php
            }
        } 
        ?>

    </form>
</body>

</html>