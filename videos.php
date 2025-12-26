<?php include "./partials/before-main.php" ?>

  <!-- Main -->
  <main class="container mx-auto p-5 grid place-content-center flex-1" >
    <h1 class="mb-10 text-center w-full text-xl sm:text-2xl lg:text-3xl"><?= $isEn ? 'Introductory Video' : 'فيديو تعريفي' ?></h1>

    <video controls class="w-full max-w-6xl rounded-lg shadow-lg">
        <source src="videos/<?= $isEn ? 'en' : 'ar' ?>.mp4" type="video/mp4">
        <?= $isEn ? 'Your browser does not support the video tag.' : 'متصفحك لا يدعم عنصر الفيديو' ?>
    </video>
  </main>

<?php include "./partials/after-main.php" ?>