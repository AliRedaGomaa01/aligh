<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container flex-1 mx-auto  p-5">
  <section class="container mx-auto  grid align-items-stretch justify-items-stretch min-h-screen relative">
    <div
      class="text:2xl md:text-4xl lg:text-5xl bg-indigo-100 rounded-xl shadow-lg grid place-items-center select-none cursor-pointer z-50 p-5 text-center"
      dir="rtl" onclick="add(+1)">
      أعوذ بالله من كل شر - وأسأله من كل خير ،، لا إله إلا الله وحده لا شريك له له الملك وله الحمد وهو على كل شيء قدير -
      أقررت له بظلمي وتقصيري وضعفي وجهلي ،، واستغفر الله وأتوب إليه - وسبحان الله وبحمده ،، والحمد لله - والله أكبر ،،
      وأفوض أمري إلى الله - ولا حول ولا قوة إلا بالله ،، وصلى الله وسلم وبارك على عبده ونبيه محمد ،، عدد كل شيء
      <br>
      <span id="counter">0</span>
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
  </section>
</main>

<script>
  var counter = +localStorage.getItem('counter') || 0;
  function updateUIAndStore() {
    document.getElementById('counter').innerText = counter;
    localStorage.setItem('counter', counter);
  }
  function add(num) {
    if (counter + +num >= 0) {
      counter += +num;
      updateUIAndStore()
    }
  }
  function reset() {
    counter = 0;
    updateUIAndStore()
  }
  updateUIAndStore()
</script>

<?php include "./partials/after-main.php" ?>