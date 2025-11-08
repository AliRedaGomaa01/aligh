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
  
  <script>
    function increaseCounter() {
      const counterElement = document.getElementById('counter');
      let count = parseInt(counterElement.innerText, 10);
      count += 1;
      counterElement.innerText = count;
    }
  </script>

</head>

<body class="min-w-full  min-h-screen flex flex-col items-between justify-between  gap-[5rem] font-sans text-xl">
  <!-- Header -->
  <?php include "header.php" ?>


  <!-- Main -->
  <main class="container mx-auto p-5 grid place-items-center flex-1" onclick="increaseCounter()">
    <div id="counter" class="text-4xl">0</div>
  </main>

  <!-- Footer -->
  <?php include "footer.php" ?>

</body>

</html>