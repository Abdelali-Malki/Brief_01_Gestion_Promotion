<?php include '../data-access/conn.php'; ?>
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
    <div class="cont">
        <div class="input_div">
        <form action="../business/addpromotion.php" method="POST">
        <input type="text" name="nom" placeholder="Ajouter promotion" style="height: 30px; margin-top:50px;margin-left:100px;">
        <input type="submit" name="add_prom" id="" style=" margin-top:50px;" >
        <input style="margin-left:600px;height:30px; margin-top:50px;" class="search" type="text" id="search" name="search" placeholder="Chercher promotion"></label>

    </form>
        </div>
        <table  id="customers" style="width: 100%; margin-top:50px;">
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            <tbody id="tbody">
                <?php
                $select_query = "SELECT * FROM promotion";
                $select_res = $conn->query($select_query);
                if ($select_res->num_rows > 0) {
                    while ($row = $select_res->fetch_assoc()) {
                ?>
                        <tr class="data">
                            <td><?php echo $row["nom"]; ?></th>
                            <td class="edit_btn"><a href="updatepromotion.php?edit_id=<?php echo $row["id_promotion"]; ?>">Edit</a>/<a href="../business/delete.php?delete_id=<?php echo $row["id_promotion"]; ?>">Delete</a></th>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="search.js"></script>
</body>

</html>