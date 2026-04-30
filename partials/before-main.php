<!-- request variables -->
<?php
$lang = $_GET['lang'] ?? 'ar';
$lang = in_array($lang, ['en', 'ar']) ? $lang : 'ar';
$isEn = $lang == 'en';
$isSiphah = str_contains($_SERVER['REQUEST_URI'], 'siphah');
?>
<!DOCTYPE html>
<html lang="<?= $isEn ? 'en' : 'ar' ?>" dir="<?= $isEn ? 'ltr' : 'rtl' ?>">
<!-- head -->

<head>

  <?php include "meta.php" ?>
  <?php include "styles.php" ?>

</head>

<body
  class="min-w-full  min-h-screen flex flex-col items-between justify-between  <?= $isSiphah ? ' bg-gray-800 ' : ' ' ?>  gap-[2rem] sm:gap-[4rem] font-sans text-xl">
  <!-- Header -->
  <?php include "header.php" ?>