<?php include_once("./template/header.php"); ?>
<?php include_once("./template/sideBar.php"); ?>


<div class="bg-gray-50 p-5 rounded">
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
      <a class="flex items-center text-black font-bold text-sm hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
        Exchange Calculator
      </a>
    </li>
  </ol>
  <hr class="border-white my-3" />

  <?php
  $content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
  $obj = json_decode($content);
  ?>

  <form action="./exchange-process.php" method="post">
    <div class=" grid grid-cols-2 gap-5">
      <div class="max-w-sm col-span-full">
        <label for="amount" class="block text-sm font-medium mb-2 dark:text-white">To Currency Amount</label>
        <input type="number" name="amount" id="amount" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your amount" />
      </div>

      <select name="from_currency" class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600 col-span-1">
        <option>From Currency</option>
        <?php foreach ($obj->rates as $key => $rate) : ?>
          <option value="<?= $key ?>-<?= $rate ?>"><?= $key ?></option>
        <?php endforeach ?>
      </select>

      <select name="to_currency" class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600 col-span-1">
        <option selected="">To Currency</option>
        <?php foreach ($obj->rates as $key => $rate) : ?>
          <option value="<?= $key ?> - <?= $rate ?>"><?= $key ?></option>
        <?php endforeach ?>
      </select>
      <button type="submit" name="exchange_btn" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none w-full justify-center col-span-full">
        Exchange
      </button>
    </div>
  </form>
</div>

<?php include_once("./template/footer.php"); ?>