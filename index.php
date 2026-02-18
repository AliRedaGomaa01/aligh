<?php include "./partials/before-main.php" ?>

<!-- Main -->
<main class="container mx-auto p-5 flex-1 flex flex-col items-center justify-center gap-10">
  <?php $parentSectionClasses = "grid grid-cols-1 gap-10 mx-auto shadow-[-3px_-3px_3px_0px_rgb(0,0,0,0.5),3px_3px_3px_0px_rgb(0,0,0,0.5)] p-5 sm:p-10 leading-8 rounded-xl w-full max-w-[800px] "; ?>

  <section class="<?= $parentSectionClasses ?>">
    <?php include "sections/videos.php" ?>
  </section>

  <section class="<?= $parentSectionClasses ?>">
    <?php include "sections/section1.php" ?>

    <?php include "sections/section2.php" ?>

    <?php include "sections/section3.php" ?>

    <?php include "sections/section4.php" ?>

    <?php include "sections/section5.php" ?>
  </section>
</main>

<?php include "./partials/after-main.php" ?>