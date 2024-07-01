<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappen</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <div class="LoginPage">
        <div class="text-center mt-4 name">
            Boodschappen lijst
        </div>
        <br>
        <form>
            <div class="form-field ">
                <input type="text" name="product" id="product" placeholder="naam product ">
            </div>
            <div class="form-field ">
                <input type="text" name="merk" id="merk" placeholder="merk">
            </div>
            <div>
                <select class="form-field" name="type" id="type" placeholder="type">
                    <option>drinken</option>
                    <option>fruit</option>
                    <option>brood</option>
                    <option>chips</option>
                </select>
            </div>

            <div>
                <input class="form-field" type="number" name="ppe" id="ppe" placeholder="Prijs Per Eenheid">

            </div>

            <button class="btn mt-3">voeg toe</button>
        </form>
    </div>

    <div>
</body>

</html>