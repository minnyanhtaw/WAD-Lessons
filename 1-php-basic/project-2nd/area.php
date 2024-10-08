<?php

if (empty($_POST["home_width"]) || empty($_POST["home_breadth"])) {
    die("Need All Input");
}

?>

<?php include("./template/header.php") ?>
<?php include("./template/sidebar.php") ?>

<section class="px-4 pb-4 pt-2 sm:ml-64">
    <header class=" hidden md:block lg:block mb-5">
        <h1 class=" text-2xl font-bold">Backend Project</h1>
    </header>

    <div class=" bg-gray-100 py-4 rounded-lg">
        <nav class="flex px-4 mb-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="./index.php"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Area
                            Calculator</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="./index.php"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Result</a>
                    </div>
                </li>
            </ol>
        </nav>
        <hr class=" border-white mb-5">

        <?php

        $width = $_POST["home_width"];
        $breadth = $_POST["home_breadth"];

        $area = $width * $breadth;

        $fileName = "saveRecord.txt";
        if (!file_exists($fileName)) {
            touch($fileName);
        }

        $fileStream = fopen($fileName, "a+");
        fwrite($fileStream, "\n$width * $breadth = $area");
        fclose($fileStream);
        ?>

        <div class="px-4">
            <p class="text-3xl text-center font-bold mb-5"> <?= $area ?> Sqft</p>
            <div class="flex items-center gap-2">
                <a href="./index.php"
                    class="bg-blue-500 text-sm inline-flex justify-center font-medium hover:bg-white hover:text-black border border-blue-500 text-white py-2 px-4 rounded w-full">Calculate again</a>
                <a href="./record-list.php"
                    class="bg-white inline-flex justify-center text-sm font-medium hover:bg-blue-500 border border-blue-500 text-black hover:text-white py-2 px-4 rounded w-full">All Records</a>
            </div>
        </div>
    </div>
</section>
<?php include("./template/footer.php") ?>