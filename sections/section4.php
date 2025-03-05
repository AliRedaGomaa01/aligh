<section class="space-y-10">
  <h2 class="text-2xl font-semibold ">
    <?= $isEn ?
      "
              Access My Updated CV
            " :
      "
              احصل على أحدث سيرة ذاتية  
            "
      ?>
  </h2>
  <p class="text-lg leading-7">
    <?= $isEn ?
      "
          Get my <strong>latest CV</strong>, <strong>certificates</strong>, and more resources using the following link:
            " :
      "
          يمكنك الوصول إلى 
          <strong>السيرة الذاتية المحدثة</strong>،
           <strong>شهاداتي</strong>
           ، والمزيد عبر الرابط التالي:
            "
      ?>
    <a href="https://drive.google.com/drive/u/0/folders/14OHQjPXWy4fpqx-qvVO9KVZcPWDCQHkm"
      class="underline hover:text-blue-600" target="_blank">
      <?= $isEn ?
        "
              Google Drive Link
            " :
        "
              رابط جوجل درايف
            "
        ?>
    </a>
  </p>
</section>