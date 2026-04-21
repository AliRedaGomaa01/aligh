<?php 

// body classes 
$bodyClasses ="
      body-bg-color
        rtl:bg-gradient-to-r ltr:bg-gradient-to-l from-purple7 from-40% to-60% to-gray4 min-w-full
      font-sizes
          max-md:ltr:text-[5vw] max-md:rtl:text-[6vw]
          md:max-2xl:ltr:text-[2.6vw] md:max-2xl:rtl:text-[2.9vw]
          2xl:ltr:text-[38px] 2xl:rtl:text-[42px]";

// main classes 
$mainClasses ="grid grid-cols-1 md:grid-cols-2 w-full max-w-[1530px] relative mx-auto";

// section classes
$sectionClasses = "
      box-borders
        max-sm:border-b-4 
        max-sm:[&:not(:first-child)]:border-t-4 
        sm:border-b-[6px] 
        sm:[&:not(:first-child)]:border-t-[6px] 
        md:border-b-8 
        md:[&:not(:first-child)]:border-t-8 
        md:[&:nth-child(2)]:border-t-0 
        md:rtl:even:border-l-8 md:rtl:odd:border-r-8 
        md:ltr:odd:border-l-8 md:ltr:even:border-r-8

      box-colors 
        border-current 
        max-md:odd:bg-gray4 max-md:even:bg-purple7
        max-md:even:text-gray4 max-md:odd:text-purple7
        md:[&:nth-child(4n)]:bg-gray4 
        md:[&:nth-child(4n)]:text-purple7 
        md:[&:nth-child(4n+1)]:bg-purple7 
        md:[&:nth-child(4n+1)]:text-gray4 
        md:[&:nth-child(4n+2)]:bg-purple7
        md:[&:nth-child(4n+2)]:text-gray4
        md:[&:nth-child(4n+3)]:bg-gray4
        md:[&:nth-child(4n+3)]:text-purple7

      box-sizes
          w-full box-border
          max-md:h-[66vw] md:h-[32vw] 2xl:h-[480px]
          py-4 px-8 sm:p-8 md:p-6 xl:p-12 m-0

      box-layout
        relative
        flex flex-col items-start justify-center text-justify
";

// Corner Box 

$cornerBoxClasses = "w-3 h-2 sm:w-4 sm:h-[10px] absolute bg-current md:hidden z-10";

$cornerBoxPositionClasses = [
  "top-0 left-0",
  "top-0 right-0",
  "bottom-0 left-0",
  "bottom-0 right-0",
];

$cornerBoxes = array_map(function ($positionClass) use ($cornerBoxClasses) {
  return "<div class='{$cornerBoxClasses} {$positionClass}'></div>";
}, $cornerBoxPositionClasses);

$middleDecorationBoxClasses = "hidden md:block md:w-7 md:h-7 lg:w-8 lg:h-8 xl:w-10 xl:h-10 absolute top-0 -translate-y-[calc(50%+8px)] scale-150 rtl:left-0   ltr:right-0 z-20 rtl:-translate-x-[calc(50%+8px)]  ltr:translate-x-[calc(50%+8px)]";

$bottomDecorationShapeClasses = "hidden md:block absolute bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[1530px] z-10 md:w-[90px] md:h-[45px] lg:w-[100px] lg:h-[50px] xl:w-[120px] xl:h-[60px] ltr:-scale-x-100";

// lang images 
$langImageClasses = "w-12 h-12 md:w-[90px] md:h-[45px] lg:w-[100px] lg:h-[50px] xl:w-[120px] xl:h-[60px] absolute top-0 max-md:rtl:left-0 max-md:ltr:right-0 md:right-1/2 md:translate-x-1/2 z-20 bg-blend-multiply hover:scale-150 hover:opacity-90 bg-transparent transition-transform duration-300";

$langImageSrces = [
  ["/images2/lang-ar-sm.png",' max-md:rtl:hidden md:hidden '],
  ["/images2/lang-en-sm.png",' max-md:ltr:hidden md:hidden '],
  ["/images2/lang-ar-lg.png",' max-md:hidden md:rtl:hidden '],
  ["/images2/lang-en-lg.png",' max-md:hidden md:ltr:hidden'],
];

$langImageHref = $lang === "en" ? "?lang=ar" : "?lang=en"; 

$langImages = array_map(function ($arr) use ($langImageClasses, $langImageHref) {
  return "<a href='{$langImageHref}'><img src='{$arr[0]}' alt='lang image' class='{$langImageClasses} {$arr[1]}'></a>";
}, $langImageSrces);
