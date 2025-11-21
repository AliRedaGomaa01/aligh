<header class="">

  <div class="bg-main w-full p-[1.5rem] sm:p-[3rem] text-white grid grid-cols-1 shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)]">
    <div class="grid grid-cols-2 justify-items-between items-center gap-5">
      <div class="">
        <a href="/<?= $isEn ? '' : '?lang=ar' ?>" class="w-fit">
          <img src="/images/img-new.jpg" class=" h-[120px] sm:h-[170px] w-[120px] sm:w-[170px] rounded-full overflow-hidden"
            alt="Logo">
        </a>
      </div>
      <div class="text-3xl grid grid-cols-1 gap-3 justify-items-end">
        <p class="text-center link px-3 py-2 rounded-xl text-[1.3rem] sm:text-[2rem] font-bold">
          <a href="<?= $isEn ? '?lang=ar' : '?lang=en' ?>" class=""> <?= $isEn ? "العربية" : "English" ?></a>
        </p>
      </div>
    </div>
  </div>
</header>