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
  <?php include "./data2/content" . ucfirst($lang) . ".php" ?>
  <?php include "./data2/sectionClasses.php" ?>

</head>