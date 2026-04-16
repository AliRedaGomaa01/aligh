<?php $sectionClasses = "
      box-borders
        max-md:border-b-4 
        max-md:[&:not(:first-child)]:border-t-4 
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
          p-4 sm:p-8 md:p-6 xl:p-12 m-0
          max-md:ltr:text-[5vw] max-md:rtl:text-[6vw]
          md:max-2xl:ltr:text-[2.7vw] md:max-2xl:rtl:text-[3.2vw]
          2xl:ltr:text-[40px] 2xl:rtl:text-[48px]

      box-layout
        relative
        flex flex-col items-start justify-center text-justify
";

// Corner Box 

$cornerBoxClasses = "w-3 h-3 absolute bg-current md:hidden z-10";

$cornerBoxPositionClasses = [
  "top-0 left-0",
  "top-0 right-0",
  "bottom-0 left-0",
  "bottom-0 right-0",
];

$cornerBoxes = array_map(function ($positionClass) use ($cornerBoxClasses) {
  return "<div class='{$cornerBoxClasses} {$positionClass}'></div>";
}, $cornerBoxPositionClasses);

// lang images 
$langImageClasses = "w-12 h-12 md:w-[120px] md:h-[60px] absolute top-0 max-md:rtl:left-0 max-md:ltr:right-0 md:right-1/2 md:translate-x-1/2 z-20 bg-blend-multiply hover:scale-150 hover:opacity-90 bg-transparent transition-transform duration-300";

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
