<?php include "./partials/before-main.php" ?>
<?php include "./partials/azkar-variables.php" ?>

<!-- Main -->
<main class="container flex-1 mx-auto  p-5 ">
  <section class="container mx-auto  grid align-items-stretch justify-items-stretch min-h-screen relative">
    <div
      class="text-sm md:text-lg xl:text-xl bg-gray-900 text-gray-200 rounded-xl shadow-lg grid place-items-center select-none cursor-pointer z-50 p-5 text-center"
      dir="rtl" onclick="add(+1)">
      <?= $azkar[$azkarIndex] ?>
      <span id="counter" class="w-14 h-14 mt-10 block bg-gray-600 rounded-full grid place-items-center">0</span>
    </div>
  </section>

  <section class="container flex flex-row flex-wrap justify-around gap-5 mt-5 mx-auto max-w-screen">
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="add(-1)">-1</button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="add(10)">+10</button>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
      onclick="add(-10)">-10</button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="add(50)">+50</button>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
      onclick="add(-50)">-50</button>
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="reset()">Reset</button>
    <a href="?azkarIndex=<?= $azkarIndex === '0' ? '1' : '0' ?>" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Change</a>
  </section>
</main>

<script>
  const params = new URLSearchParams(window.location.search);
  const azkarIndex = params.get('azkarIndex') ?? '0';

  const storageKey = `counter${azkarIndex}`;
  const counterEl = document.getElementById('counter');

  let counter = Number(localStorage.getItem(storageKey)) || 0;

  function render() {
    counterEl.textContent = counter;
  }

  function save() {
    localStorage.setItem(storageKey, counter);
  }

  function update() {
    render();
    save();
  }

  function add(num) {
    const value = Number(num);
    if (!Number.isNaN(value) && counter + value >= 0) {
      counter += value;
      update();
    }
  }

  function reset() {
    counter = 0;
    update();
  }

  render();
</script>

<?php include "./partials/after-main.php" ?>