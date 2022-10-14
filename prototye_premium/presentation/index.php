<?php include '../data-access/conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="cont">
        <div class="input_div">
            <a href="addpromotion.php">Ajouter promotion</a>
            <input type="text" id="search" name="search" placeholder="promotion">
        </div>
        <table style="width: 100%;">
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