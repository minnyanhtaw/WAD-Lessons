<?php include_once("./template/header.php"); ?>
<?php include_once("./template/sideBar.php"); ?>

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
            <a class="flex items-center text-gray-500 font-bold text-sm  hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                Area Calculator
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
            </a>
        </li>

        <li class="inline-flex items-center">
            <a class="flex items-center text-black font-bold text-sm  hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                Calculate Results
            </a>
        </li>
    </ol>
    <hr class=" border-white my-3">

    <?php
    $fileName = "saveRecord.txt";
    if (!file_exists($fileName)) {
        touch($fileName);
    }
    $fileStream = fopen($fileName, "r");
    while (!feof($fileStream)) :
        $content = fgets($fileStream);
        if ($content === "\n") {
            continue;
        }
    ?>
        <p class=" bg-white p-2 mb-3 rounded font-mono">
            <?= $content ?> Sqft
        </p>
    <?php endwhile; ?>

    <a href="./index.php" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none w-full justify-center">
        Calculate Again
    </a>

</div>


<?php include_once("./template/footer.php"); ?>
