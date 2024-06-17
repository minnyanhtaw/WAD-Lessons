<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1><?php echo "San Kyi Tar"; ?></h1>
    <p>
        <?= "Min GaLar Par"; ?>
    </p> -->

    <!-- <?php if (true) : ?>
        <h1>it is true</h1>
    <?php else :  ?>
        <h1>it is false</h1>
    <?php endif; ?> -->

    <?php
    $fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
    ?>

    <ul>
        <?php foreach ($fruits as $fruit) : ?>
            <li>
                <?= $fruit ?>
            </li>
        <?php endforeach ?>
    </ul>





</body>

</html>