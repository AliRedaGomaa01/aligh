<?php include "./partials2/before-main.php" ?>

<body class="rtl:bg-gradient-to-r ltr:bg-gradient-to-l from-purple7 from-40% to-60% to-gray4 min-w-full
      <?= $isEn ? " playfair-display-regular " : " amiri-regular " ?>:
      font-sizes
          max-md:ltr:text-[5vw] max-md:rtl:text-[6vw]
          md:max-2xl:ltr:text-[2.7vw] md:max-2xl:rtl:text-[3.2vw]
          2xl:ltr:text-[40px] 2xl:rtl:text-[48px]
          ">

  <main class="grid grid-cols-1 md:grid-cols-2 w-full max-w-[1530px] relative mx-auto">
    <!-- language images  -->
    <?php foreach ($langImages as $img): ?>
      <?= $img ?>
    <?php endforeach; ?>

    <!-- bottom decoration shape -->
    <img src="/images2/footer-top-lg.png" alt="bottom decoration shape" class="hidden md:block md:w-[120px] md:h-[60px] absolute bottom-0 left-1/2 -translate-x-1/2 ltr:scale-x-[-1]  z-20">

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
          <img src="/images2/md-section-boxes.png" alt="decoration box" class="hidden md:block md:w-8 md:h-8 absolute top-0 -translate-y-[calc(50%+8px)] scale-150 rtl:left-0 <?= $index % 4 == 0 ? " ltr:rotate-90 "  : " rtl:rotate-90 " ?>  ltr:right-0 z-20 rtl:-translate-x-[calc(50%+8px)]  ltr:translate-x-[calc(50%+8px)] ">
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