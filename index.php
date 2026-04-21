<?php include "./partials2/before-main.php" ?>

<body class="
      <?= $bodyClasses ?>
      <?= $isEn ? " playfair-display-regular " : " amiri-regular " ?>">

  <main class="<?= $mainClasses ?>">
    <!-- language images  -->
    <?php foreach ($langImages as $img): ?>
      <?= $img ?>
    <?php endforeach; ?>

    <!-- bottom decoration shape -->
    <img src="/images2/footer-top-lg.png" alt="bottom decoration shape" class="<?= $bottomDecorationShapeClasses ?>">

    <!-- sections -->
    <section class="
      <?= $sectionClasses ?>
    ">
      <?php foreach ($cornerBoxes as $cornerBox): ?>
        <?= $cornerBox ?>
      <?php endforeach; ?>

      <video controls class="w-full " poster="/images2/video-poster.png">
        <source src="videos2/<?= $lang ?>.mp4" type="video/mp4">
        <?= $isEn ? 'Your browser does not support the video tag.' : 'متصفحك لا يدعم عنصر الفيديو' ?>
      </video>
    </section>
    <section class="
      <?= $sectionClasses ?>
    ">
      <?php foreach ($cornerBoxes as $cornerBox): ?>
        <?= $cornerBox ?>
      <?php endforeach; ?>

      <img src="./images2/name-<?= $lang ?>.png" alt="name img" class="w-full">
    </section>
    <?php foreach ($sections as $index => $section) : ?>
      <section class="
        <?= $sectionClasses ?>
      ">
        <?php foreach ($cornerBoxes as $cornerBox): ?>
          <?= $cornerBox ?>
        <?php endforeach; ?>
        <!-- middle decoration box -->
        <?php if ($index % 2 == 0) : ?>
          <img src="/images2/md-section-boxes.png" alt="decoration box" class="<?= $middleDecorationBoxClasses ?> <?= $index % 4 == 0 ? " ltr:rotate-90 "  : " rtl:rotate-90 " ?> ">
        <?php endif; ?>

        <p class="">
          <?= $section['body'] ?>
        </p>
        <?php if (!empty($section['listItems'])) : ?>
          <ul class="list-disc list-inside mt-4">
            <?php foreach ($section['listItems'] as $item) : ?>
              <li class="mb-2">
                <?= $item ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </section>
    <?php endforeach; ?>
  </main>

  <?php include "./partials2/after-main.php" ?>