<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container mx-auto p-5 flex-1 flex flex-col items-center justify-center gap-10">
  <?php 

  $parentSectionClasses = "grid grid-cols-1 gap-5 md:gap-10 mx-auto shadow-[-3px_-3px_3px_0px_rgb(0,0,0,0.5),3px_3px_3px_0px_rgb(0,0,0,0.5)] p-5 sm:p-10 leading-8 rounded-xl w-full max-w-[800px] ";

  $sectionTitle = " font-bold text-center container bg-main text-white text-2xl py-4  px-2 sm:text-3xl sm:py-6  sm:px-4 mx-auto rounded-lg" ?>

  <section class="<?= $parentSectionClasses ?>">
    <?php include "sections/videos.php" ?>
  </section>

  <section class="<?= $parentSectionClasses ?>">
    <?php include "sections/section1.php" ?>

    <?php include "sections/section2.php" ?>

    <hr>

    <?php include "sections/section3.php" ?>

    <hr>

    <?php include "sections/section4.php" ?>

    <hr>

    <?php include "sections/section5.php" ?>
  </section>
</main>

<?php include "./partials/after-main.php" ?>