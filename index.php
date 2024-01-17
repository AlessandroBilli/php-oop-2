<?php
require_once __DIR__ . '/Models/prodotti.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <title>Pet Shop</title>
</head>

<body>

    <h1 class="text-center">Pet Commerce</h1>
    <div class="d-flex container ">
        <div class="card" style="width: 18rem;">
            <img src="img/cane-1.jpg" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Prodotti Cani <i class="fa-solid fa-dog"></i></h5>
                <p class="card-text">
                <ul>
                    <li>Cibo: <?php echo $cane->cibo; ?></li>
                    <li>Giochi: <?php echo $cane->giochi; ?></li>
                    <li>Cucce: <?php echo $cane->cucce; ?></li>
                </ul>
                </p>
                <a href="#" class="btn btn-primary">Acquista</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="img/Ginger_european_cat.jpg" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Prodotti Gatti <i class="fa-solid fa-dog"></i></h5>
                <p class="card-text">
                <ul>
                    <li>Cibo: <?php echo $gatto->cibo; ?></li>
                    <li>Giochi: <?php echo $gatto->giochi; ?></li>
                    <li>Cucce: <?php echo $gatto->cucce; ?></li>
                </ul>
                </p>
                <a href="#" class="btn btn-primary">Acquista</a>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>