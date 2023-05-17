<?php
require_once __DIR__ . "/db.php";
var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetPlanet</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <div class="row gap-3">
        <?php foreach($products as $product){ ?>
            <div class="col-3 card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->category->category ?></h6>
                    <p class="card-text"><?php echo $product->price ?></p>
                    <p class="card-text"><?php if($product->expire){echo $product->expire;} elseif ($product->color){echo $product->color;} else{echo $product->dimension;} ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>