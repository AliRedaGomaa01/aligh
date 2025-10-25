<footer class="bg-main w-full grid it-ce text-white  shadow-[0px_-3px_3px_0px_rgb(0,0,0,0.5)] py-10 px-5 max-sm:[&_*]:text-sm">
  <?php include "sections/footer-social.php" ?>

  <p class="text-center">
    <?= $isEn ? "Designed & Developed & Deployed By" : "تم تصميمه وتطويره واستضافته بواسطة" ?>
    <br class="grid sm:hidden">
    <span class="font-black italic text-2xl">
      <?= $isEn ? "Ali Hussein" : "علي حسين" ?>
    </span>
    &copy;
    <script>
      document.write(new Date(Date.now()).getFullYear());
    </script>
    <br class="grid sm:hidden">
    <?= $isEn ? " All Rights Reserved " : "جميع الحقوق محفوظة " ?>
  </p>

</footer>