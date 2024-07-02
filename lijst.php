<?php

require_once "cd.php";

    if(isset($_POST['product_id'])){
    $id = $_POST['product_id'];
    $sql = 'DELETE FROM boodschappen WHERE id = ' . $id;
    mysqli_query($conn,$sql);
}

$producten = [];

$sql = "SELECT * FROM boodschappen ORDER BY type, naam";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    $producten = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappen Lijst</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div class="styling list">
        <div class="text-center mt-4 name">
            Boodschappen lijst
        </div>
        <br>

        <form method="post">
            <table border="1">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>merk</th>
                        <th>type</th>
                        <th>prijs per eenheid</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($producten) === 0): ?>
                        <tr>
                            <td colspan="4"><i>Geen boodschappen gevonden</i></td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($producten as $product): ?>
                            <tr>
                                <td><?= $product['naam']; ?></td>
                                <td><?= $product['merk']; ?></td>
                                <td><?= $product['type']; ?></td>
                                <td><?= $product['Prijs_per_eenheid']; ?></td>
                                <td><button type="submit" name="product_id" value="<?= $product['id']; ?>">Delete</button></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </form>

        <div class="footer-link">
            <a href="./index.php" class="link">product toevoegen </a>
        </div>
    </div>
</body>

</html>