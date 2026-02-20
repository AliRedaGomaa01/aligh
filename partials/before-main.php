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

<body class="min-w-full  min-h-screen flex flex-col items-between justify-between gap-[2rem] sm:gap-[4rem] font-sans text-xl">
  <!-- Header -->
  <?php include "header.php" ?>