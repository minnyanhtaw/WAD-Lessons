<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My Page</h1>

    <?php
    $products = [
        [
            "id" => 1,
            "name" => "banana",
            "price" => 200,
        ],
        [
            "id" => 2,
            "name" => "apple",
            "price" => 300,
        ],
        [
            "id" => 3,
            "name" => "mango",
            "price" => 250,
        ],
        [
            "id" => 4,
            "name" => "watermelon",
            "price" => 400,
        ]
    ]

    ?>

    <?php foreach ($products as $product) : ?>
        <div>
            <h1>
                <?= $product["name"] ?>
            </h1>
            <p>
                <?= $product["price"] ?>
            </p>
        </div>
        <hr>
    <?php endforeach; ?>

</body>

</html>