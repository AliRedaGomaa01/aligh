<!-- request variables -->
<?php
$lang = $_GET['lang'] ?? 'en';
$lang = in_array($lang, ['en', 'ar']) ? $lang : 'en';
$isEn = $lang == 'en';
?>
<!DOCTYPE html>
<html lang="<?= $isEn ? 'en' : 'ar' ?>" dir="<?= $isEn ? 'ltr' : 'rtl' ?>">
<!-- head -->

<head>

  <?php include "meta.php" ?>
  <?php include "styles.php" ?>

</head>

<body class="min-w-full  min-h-screen flex flex-col items-between gap-[5rem] font-sans text-xl">
  <!-- Header -->
  <?php include "header.php" ?>


  <!-- Main -->
  <main class="container mx-auto p-5">

    <section
      class="grid grid-cols-1 gap-10 mx-auto shadow-[-3px_-3px_3px_0px_rgb(0,0,0,0.5),3px_3px_3px_0px_rgb(0,0,0,0.5)] p-10 leading-8 rounded-xl max-w-[800px] ">

      <?php include "sections/section1.php" ?>

      <?php include "sections/section2.php" ?>

      <?php include "sections/section3.php" ?>

      <?php include "sections/section4.php" ?>

      <?php include "sections/section5.php" ?>

    </section>

  </main>

  <!-- Footer -->
  <?php include "footer.php" ?>

</body>

</html>