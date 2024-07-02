<?php

require_once "cd.php";


function getPostValue($name)
{
    $value = '';

    if (!empty($name) && isset($_POST[$name])) {
        $value = $_POST[$name];
    }

    return $value;
}

$errorMessage = '';
$successMessage = '';
if (isset($_POST['new_product'])) {

    $product = getPostValue('product');
    $merk = getPostValue('merk');
    $type = getPostValue('type');
    $prijs = getPostValue('ppe');

    if (empty($product) || empty($merk) || empty($type) || empty($prijs)) {
        $errorMessage = 'Een van je velden is leeg.';
    } else {
        $sql = "INSERT INTO boodschappen SET ";
        $sql .= "naam = '$product', ";
        $sql .= "merk = '$merk', ";
        $sql .= "type = '$type', ";
        $sql .= "prijs_per_eenheid = '$prijs'";

        if (mysqli_query($conn, $sql) === TRUE) {
            $successMessage = "Product is toegevoegd!";
        } else {
            $errorMessage = "Er ging iets mis..";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boodschappen toevoegen</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div class="styling">
        <div class="text-center mt-4 name">
            Boodschappen lijst
            <?php if ($errorMessage !== ''): ?>
                <p class="message error"><?= $errorMessage ?></p><?php endif; ?>
            <?php if ($successMessage !== ''): ?>
                <p class="message sucess"><?= $successMessage ?></p><?php endif; ?>

        </div>
        <br>
        <form method="POST">
            <div class="form-field ">
                <input type="text" name="product" id="product" placeholder="naam product ">
            </div>
            <div class="form-field ">
                <input type="text" name="merk" id="merk" placeholder="merk">
            </div>
            <div class="form-field">
                <select name="type" id="type" placeholder="type">
                    <option>drinken</option>
                    <option>fruit</option>
                    <option>brood</option>
                    <option>chips</option>
                </select>
            </div>

            <div class="form-field">
                <input type="number" step='0.01'  name="ppe" id="ppe" placeholder="Prijs Per Eenheid">
            </div>

            <button type="submit" name="new_product" class="btn mt-3">voeg toe</button>
        </form>

        <div  class="footer-link">
            <a href="./lijst.php" class="link">Ga naar lijst</a>
        </div>
    </div>
</body>

</html>