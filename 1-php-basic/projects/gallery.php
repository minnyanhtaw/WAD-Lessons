<?php require("./template/header.php"); ?>
<?php include("./template/sideBar.php"); ?>
<section class=" bg-gray-100 rounded-lg p-10">
    <form action="./gallery-process.php" enctype="multipart/form-data" method="post" class="max-w-sm">
        <label for="file-input" class="sr-only">Choose file</label>
        <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
    dark:file:bg-neutral-700 dark:file:text-neutral-400">
        <div class="mt-3">
            <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Upload
            </button>
        </div>
    </form>
</section>
<?php include("./template/footer.php"); ?>