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

<body class="min-w-full  min-h-screen flex flex-col items-between justify-between  gap-[5rem] font-sans text-xl">
  <!-- Header -->
  <?php include "header.php" ?>


  <!-- Main -->
  <main class="container mx-auto p-5 grid place-items-center flex-1" >
    <h1 class="mb-10 text-xl sm:text-2xl lg:text-3xl"><?= $isEn ? 'Introductory Video' : 'فيديو تعريفي' ?></h1>

    <video controls class="w-full max-w-6xl rounded-lg shadow-lg">
        <source src="videos/<?= $isEn ? 'en' : 'ar' ?>.mp4" type="video/mp4">
        <?= $isEn ? 'Your browser does not support the video tag.' : 'متصفحك لا يدعم عنصر الفيديو' ?>
    </video>
  </main>

  <!-- Footer -->
  <?php include "footer.php" ?>

</body>

</html>