<footer class="max-md:bg-[url('/images2/footer-sm.png')] w-full max-w-[1530px] md:bg-[url('/images2/footer-lg.png')] mx-auto bg-no-repeat bg-cover bg-center relative flex max-md:flex-col-reverse items-center justify-center md:justify-between max-sm:gap-y-2 sm:gap-y-4 p-4 sm:p-6 md:p-8 text-white">

  <div class="flex flex-col gap-4 max-md:text-center">
    <p>
      <?= $isEn ? "Thank you For Your Time" : "شكرا لك على وقتك" ?>
    </p>
    <p>
      <?= $isEn ? " All Rights Reserved " : "جميع الحقوق محفوظة " ?>
      &copy;
      <script>
        document.write(new Date(Date.now()).getFullYear());
      </script>
    </p>
  </div>

  <?php include "footer-social.php" ?>

</footer>