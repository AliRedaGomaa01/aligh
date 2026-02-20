  <h1 class="<?= $sectionTitle ?>">
    <?= $isEn ? 'Introductory Video' : 'فيديو تعريفي' ?>
  </h1>
<video controls class="w-full max-w-6xl rounded-lg shadow-lg" poster="/images/poster.png" >
  <source src="videos/<?= $isEn ? 'en' : 'ar' ?>.mp4" type="video/mp4">
  <?= $isEn ? 'Your browser does not support the video tag.' : 'متصفحك لا يدعم عنصر الفيديو' ?>
</video>