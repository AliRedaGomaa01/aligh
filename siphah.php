<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container mx-auto p-5 grid align-items-stretch justify-items-stretch flex-1">
  <div id="counter" class="text-5xl bg-indigo-50 rounded-xl shadow-lg grid place-items-center select-none cursor-pointer"
    onclick="this.innerText = +this.innerText +1">
    0
  </div>
</main>

<?php include "./partials/after-main.php" ?>