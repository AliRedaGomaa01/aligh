<header class="">
  <div dir="ltr" class="bg-main w-full p-[1.5rem] sm:p-[3rem] text-white flex justify-items-between items-center gap-5 shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)]
    [&>div]:flex [&>div]:gap-2 [&>div]:sm:gap-6 [&>div]:items-center [&>div]:w-full 
    ">
    <div class="justify-start ">
      <a href="/<?= $isEn ? '' : '?lang=ar' ?>">
        <img src="/images/img-new.jpg"
          class=" h-[120px] sm:h-[170px] w-[120px] sm:w-[170px] rounded-full overflow-hidden" alt="Logo">
      </a>
    </div>
    <div class="justify-end max-sm:[&_svg]:scale-90  sm:[&_svg]:scale-125 space-x-1 sm:space-x-5 [&>*]:text-center [&>*:hover]:text-blue-200 sm:[&>*]:p-1  [&>*]:rounded-xl [&>*]:text-[1.3rem] [&>*]:sm:text-[2rem] [&>*]:font-bold">
      <a href="/<?= $isEn ? '' : '?lang=ar' ?>" title="home page">
        <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 640 640">
          <path fill="currentColor"
            d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z" />
        </svg>
      </a>
      <a href="/videos.php<?= $isEn ? '' : '?lang=ar' ?>" title="videos page">
        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="35" viewBox="0 0 640 640">
          <path fill="currentColor"
            d="M128 128C92.7 128 64 156.7 64 192L64 448C64 483.3 92.7 512 128 512L384 512C419.3 512 448 483.3 448 448L448 192C448 156.7 419.3 128 384 128L128 128zM496 400L569.5 458.8C573.7 462.2 578.9 464 584.3 464C597.4 464 608 453.4 608 440.3L608 199.7C608 186.6 597.4 176 584.3 176C578.9 176 573.7 177.8 569.5 181.2L496 240L496 400z" />
        </svg>
      </a>
      <a href="<?= !$isEn ? '?lang=en' : '?lang=ar' ?>"> <?= !$isEn ? 'En' : 'Ar' ?> </a>
    </div>
  </div>
</header>