<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container flex-1 mx-auto  p-5 ">
  <section class="container mx-auto  grid align-items-stretch justify-items-stretch min-h-screen relative">
    <div
      class="text:xl md:text-2xl lg:text-3xl bg-gray-900 text-gray-200 rounded-xl shadow-lg grid place-items-center select-none cursor-pointer z-50 p-5 text-center"
      dir="rtl" onclick="add(+1)">
      أعوذ بالله من كل شر - وأسأله من كل خير ،،
      <br>
      <br>
      لا إله إلا الله وحده لا شريك له له الملك وله الحمد وهو على كل شيء قدير -
      أقررت له بظلمي وتقصيري وضعفي وجهلي ،،
      <br>
      <br>
      واستغفر الله وأتوب إليه - وسبحان الله وبحمده ،،
      <br>
      <br>
      والحمد لله - والله أكبر ،،
      <br>
      <br>
      وأفوض أمري إلى الله - ولا حول ولا قوة إلا بالله ،،
      <br>
      <br>
      وإنا لله وإنا إليه راجعون - وصلى الله وسلم وبارك على عبده ونبيه محمد ،،
      <br>
      <br>
      عدد كل شيء - وملئ السماوات والأرض وام بينهما
      <span id="counter" class="mt-10 block">0</span>
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