<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container flex-1 mx-auto  p-5">
  <section class="container mx-auto  grid align-items-stretch justify-items-stretch min-h-screen">
    <div id="counter"
      class="text-5xl bg-indigo-50 rounded-xl shadow-lg grid place-items-center select-none cursor-pointer"
      onclick="increment()">
      0
    </div>
  </section>

  <section class="container flex flex-row flex-wrap justify-around gap-5 mt-5 mx-auto max-w-screen">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="add(10)">+10</button>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="add(-10)">-10</button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="add(50)">+50</button>
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" onclick="add(-50)">-50</button>
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="reset()">Reset</button>
  </section>
</main>

<script>
  var counter = localStorage.getItem('counter') || 0;
  function updateUIAndStore() {
    document.getElementById('counter').innerText = counter;
    localStorage.setItem('counter', counter);
  }
  function increment() {
    counter++;
    updateUIAndStore()
  }
  function add(num) {
    counter += num;
    updateUIAndStore()
  }
  function reset() {
    counter = 0;
    updateUIAndStore()
  }
  updateUIAndStore()
</script>

<?php include "./partials/after-main.php" ?>