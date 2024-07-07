<?php

// print_r($_POST);

$amount = $_POST["amount"];
$from_currency = explode("-", $_POST["from_currency"]);
$from_currency_name = $from_currency[0];
$from_currency_rate = str_replace(",", "", $from_currency[1]);

$to_currency = explode("-", $_POST["to_currency"]);
$to_currency_name = $to_currency[0];
$to_currency_rate = str_replace(",", "", $to_currency[1]);

$mmk = $amount * $from_currency_rate;
$to = round($mmk / $to_currency_rate, 2);

?>

<?php include("./template/header.php"); ?>
<?php include("./template/sideBar.php"); ?>

<div class=" bg-gray-50 p-5 rounded">
    <ol class="flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex font-bold items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-black font-bold text-sm  hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                Area Calculator
            </a>
        </li>

    </ol>
    <hr class=" border-white my-3">

    <?php


    $width = $_POST["home_width"];
    $breadth = $_POST["home_breadth"];
    $area = $width * $breadth;

    $fileName = "saveRecord.txt";
    if (!file_exists($fileName)) {
        touch($fileName);
    }
    $fileStream = fopen($fileName, "a");
    fwrite($fileStream, "\n$amount $from_currency_name = $to $to_currency_name");
    fclose($fileStream);

    ?>
    <p class=" text-center text-5xl mb-5">
        <?= round($to, 2) ?> <?= $to_currency_name ?>
    </p>

    <div class=" flex flex-col gap-4">
        <a href="./exchange-calculator.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none w-full justify-center">
            Calculate Again
        </a>

        <a href="./record-list.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 w-full justify-center">
            All Records
        </a>
    </div>

</div>

</div>


<?php include("./template/footer.php"); ?>