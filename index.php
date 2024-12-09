<!-- request variables -->
<?php 
    $lang = $_GET['lang'] ?? 'en' ;
    $lang = in_array($lang, ['en', 'ar']) ? $lang : 'en' ;
    $isEn = $lang == 'en';
    $contentStyles = "text-justify";
?>
<!DOCTYPE html>
<html lang="<?= $isEn ? 'en' : 'ar' ?>" dir="<?= $isEn ? 'ltr' : 'rtl' ?>">
<!-- head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/<?= $isEn ? 'logoEn' : 'logoAr' ?>.png">
    <!-- Tailwind -->
    <script src="./tailwind.js"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: "Times New Roman",
                },
                colors: {
                    main: '#000000',
                }
            }
        }
    }
    </script>
    <style type="text/tailwindcss">
        @layer components {
        .it-ce {
            @apply justify-items-center items-center;
        }
        .active {
            @apply text-white bg-main;
        }
        .not-active {
            @apply text-main;
        }
        }
    </style>
    <title><?= $isEn ? 'Ali' : 'عليّ' ?></title>
</head>

<body class="min-w-[100vw]  min-h-[100vh] grid items-between gap-[5rem] font-sans text-xl">
    <!-- Header -->
    <header class=" relative grid items-start">
        <div class="">
            <div class="bg-main w-full text-white grid grid-cols-1 it-ce shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)]"
                dir="rtl">
                <div class="grid it-ce h-[120px] w-[200px]">
                    <img src="images/logoEn.png" class="h-[100%] w-[100%] <?= $isEn ? '' : 'hidden' ?>" alt="Logo">
                    <img src="images/logoAr.png" class="p-5 h-[100%] w-[100%] <?= $isEn ? 'hidden' : '' ?>" alt="Logo">
                </div>
            </div>
            <div class="bg-white w-full text-white grid grid-cols-1 items-center justify-around shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)] py-5"
                dir="rtl">
                <div class="grid it-ce grid-cols-2">
                    <a href="/?lang=ar"
                        class="  hover:active px-5 py-2 rounded-xl <?= $isEn ?  'not-active' :  'active' ?> ">العربية</a>
                    <a href="/?lang=en"
                        class="  hover:active px-5 py-2 rounded-xl <?= $isEn ? 'active' : 'not-active'?> ">English</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Main -->
    <main class="grid it-ce p-5">
        <div
            class="grid grid-cols-1 gap-8 shadow-[-3px_-3px_3px_0px_rgb(0,0,0,0.5),3px_3px_3px_0px_rgb(0,0,0,0.5)] p-10 leading-8 rounded-xl max-w-[800px] ">
            <h1 class="text-center text-main text-2xl p-5">
                <?= $isEn ? 
                'Welcome To My Website' : 
                'مرحبا بك في موقعي الشخصي' 
                ?>
            </h1>
            <p class="<?= $contentStyles ?> ">
                <?= $isEn ?
                'I am Ali Gomaa Hussein from Egypt. I work as a full-stack web developer.' 
                : 'أنا علي جمعة حسين من مصر. أعمل كمطور كامل للويب للواجهات الأمامية والخلفية.' 
                ?>
            </p>
            <p class="<?= $contentStyles ?> text-main">
                <?= $isEn ?
                'I obtained Bachelor\'s degree in Communications & Electronics Engineering in 2021. I also obtained certificates of many web development courses.' 
                : 'حصلت على درجة البكالوريوس في هندسة الاتصالات والإلكترونيات  في عام 2021. كما حصلت على شهادات الكثير من كورسات تطوير الويب.' 
                ?>
            </p>
            <p class="<?= $contentStyles ?> ">
                <?= $isEn ?
                'In my CV , You can get my ( Main info – Contact Info – Experience – Technical Skills – Projects – Web Development Courses - Expected Salary).' 
                : 'في سيرتي الذاتية ستجد ( المعلومات الأساسية عني - معلومات التواصل - خبرة العمل - مهاراتي التقنية - مشاريعي - الكورسات التي درستها - الراتب المتوقع).' 
                ?>
            </p>
            <p class="<?= $contentStyles ?> text-main">
                <?= $isEn ?
                    'You can get my ( Updated CV – Certificates – Photos - More Courses & Projects ) & More using the next link :' 
                    : 'يمكنك الوصول لـ ( السيرة الذاتية الأحدث - شهاداتي - صوري - مزيد من الكورسات والمشاريع ) والمزيد باستخدام الرابط التالي :  ' 
                    ?>
                <a href="https://drive.google.com/drive/u/0/folders/14OHQjPXWy4fpqx-qvVO9KVZcPWDCQHkm"
                    class="text-blue-500 underline" target="_blank">
                    <?= $isEn ?
                        'Google Drive Link' 
                        : 'رابط جوجل درايف' 
                        ?>
                </a>.
            </p>
            <h1 class="text-center text-main text-2xl p-5">
                <?= $isEn ? 
                'Thanks For Your Time' : 
                'شكرا لك على وقتك' 
                ?>
            </h1>
        </div>
    </main>
    <!-- Footer -->
    <footer class=" grid items-end ">
        <div class="bg-main w-full grid it-ce text-white  shadow-[0px_-3px_3px_0px_rgb(0,0,0,0.5)] text-center py-5">
            <?= $isEn ? "Designed & Developed & Deployed By"  : "تم تصميمه وتطويره واستضافته بواسطة"?>
            <br class="grid sm:hidden">
            <?= $isEn ? "Ali Hussein"  : "علي حسين"?>
            &copy;
            <script>
            document.write(new Date(Date.now()).getFullYear());
            </script>

        </div>
    </footer>
</body>

</html>