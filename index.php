<!-- request variables -->
<?php
$lang = $_GET['lang'] ?? 'en';
$lang = in_array($lang, ['en', 'ar']) ? $lang : 'en';
$isEn = $lang == 'en';
?>
<!DOCTYPE html>
<html lang="<?= $isEn ? 'en' : 'ar' ?>" dir="<?= $isEn ? 'ltr' : 'rtl' ?>">
<!-- head -->

<head>
  <title>Ali Hussein - Full-Stack Developer</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ali Hussein, a passionate full-stack web and mobile app developer.">
  <meta name="keywords"
    content="Ali Hussein, Full-Stack Developer, Web Development, Mobile Development, aly-h.com, aly-h, Aly Hussein, Developer">
  <meta name="robots" content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title" content="Ali Hussein - Full-Stack Developer">
  <meta property="og:description" content="Ali Hussein, a passionate full-stack web and mobile app developer.">
  <meta property="og:image" content="https://aly-h.com/logoEn.png">
  <meta property="og:url" content="https://aly-h.com">
  <meta property="og:url" content="https://aly-h.com" />
  <meta property="og:site_name" content="Ali Hussein" />
  <meta property="og:locale" content="en-US" />
  <meta property="og:type" content="website" />

  <meta name="googlebot" content="index, follow, max-video-preview:-1, max-image-preview:large, max-snippet:-1" />
  <!-- <meta name="google-site-verification" content="eZSdmzAXlLkKhNJzfgwDqWORghxnJ8qR9_CHdAh5-xw" /> -->
  <!-- <meta name="yandex-verification" content="14d2e73487fa6c71" /> -->

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Ali Hussein - Full-Stack Developer">
  <meta name="twitter:description" content="Ali Hussein, a passionate full-stack web and mobile app developer.">
  <meta name="twitter:image" content="https://aly-h.com/logoEn.png">

  <!-- Canonical -->
  <link rel="canonical" href="https://aly-h.com">
  <link rel="icon" type="image/png" href="./images/<?= $isEn ? 'logoEn' : 'logoAr' ?>.png">
  <link rel="apple-touch-icon" href="./images/<?= $isEn ? 'logoEn' : 'logoAr' ?>.png"> 

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
        @layer base {
        *::-webkit-scrollbar {
        display: none;
        }

        * {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }
    }

    </style>
</head>

<body class="min-w-full  min-h-screen flex flex-col items-between gap-[5rem] font-sans text-xl">
  <!-- Header -->
  <header class="">

    <div class="bg-main w-full text-white grid grid-cols-1 it-ce shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)]" dir="rtl">
      <div class="grid it-ce h-[120px] w-[200px]">
        <img src="images/logoEn.png" class="h-[100%] w-[100%] <?= $isEn ? '' : 'hidden' ?>" alt="Logo">
        <img src="images/logoAr.png" class="p-5 h-[100%] w-[100%] <?= $isEn ? 'hidden' : '' ?>" alt="Logo">
      </div>
    </div>
    <div
      class="bg-white w-full text-white grid grid-cols-1 items-center justify-around shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)] py-5"
      dir="rtl">
      <div class="grid it-ce grid-cols-2">
        <a href="/?lang=ar"
          class="  hover:active px-5 py-2 rounded-xl <?= $isEn ? 'not-active' : 'active' ?> ">العربية</a>
        <a href="/?lang=en"
          class="  hover:active px-5 py-2 rounded-xl <?= $isEn ? 'active' : 'not-active' ?> ">English</a>
      </div>
    </div>

  </header>

  <!-- Main -->
  <main class="container mx-auto p-5">

    <section
      class="grid grid-cols-1 gap-10 mx-auto shadow-[-3px_-3px_3px_0px_rgb(0,0,0,0.5),3px_3px_3px_0px_rgb(0,0,0,0.5)] p-10 leading-8 rounded-xl max-w-[800px] ">

      <section class="container bg-main text-white py-6  px-4 mx-auto rounded-lg">
        <h1 class="text-3xl font-bold text-center">
          <?= $isEn ?
            "
              Ali Hussein – Full-Stack Developer
              " :
            "
              علي حسين – مطور كامل للواجهات الأمامية والخلفية
              "

            ?>
        </h1>
      </section>

      <section class="space-y-10">
        <p class="">
          <?= $isEn ?
            "
            Welcome! I'm Ali Hussein from Egypt, a passionate full-stack web and mobile app
          developer.
          " :
            '
            مرحبًا! أنا علي حسين من مصر، أعمل بشغف كمطور كامل للواجهات الأمامية والخلفية لتطبيقات الويب والموبايل.
            '
            ?>
        </p>
        <h2 class="text-2xl font-semibold ">
          <?= $isEn ?
            "
            About Me
            " :
            '
            نبذة عني
            '
            ?>
        </h2>
        <p class="text-lg leading-7">
          <?= $isEn ?
            "
            I hold a <strong>Bachelor’s degree in Communications and Electronics Engineering</strong> (2021).
          Over the years, I have honed my skills through <strong>1000+ hours of programming and software development
            courses</strong>, earning numerous certifications along the way.
            " :
            "
            حصلت على <strong>درجة البكالوريوس في هندسة الاتصالات والإلكترونيات</strong> عام 2021. كما طورت
          مهاراتي من خلال <strong>+1000 ساعة من الكورسات</strong> في البرمجة وتطوير البرمجيات، بالإضافة إلى حصولي على العديد
          من الشهادات.
          "
            ?>

        </p>
      </section>

      <section class="space-y-10">
        <h2 class="text-2xl font-semibold ">
          <?= $isEn ?
            "
            What’s in My CV?
            " :
            "
            ماذا ستجد في سيرتي الذاتية؟
            "
            ?>
        </h2>
        <ul class="list-disc px-6 text-lg leading-7">
          <?= $isEn ?
            "
          <li>Basics & Contact Information</li>
          <li>Professional Experience</li>
          <li>Technical Skills</li>
          <li>Projects Portfolio</li>
          <li>Learning & Courses</li>
          <li>Expected Salary</li>
            " :
            "
          <li>المعلومات الأساسية ومعلومات التواصل</li>
          <li>خبرة العمل</li>
          <li>المهارات التقنية</li>
          <li>المشاريع</li>
          <li>التعلم والكورسات</li>
          <li>الراتب المتوقع</li>
            "
            ?>

        </ul>
      </section>

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
          Get my <strong>latest CV</strong>, <strong>certificates</strong>, and more resources via the
          following
          link:
            " :
            "
          يمكنك الوصول إلى <strong>السيرة الذاتية المحدثة</strong>، <strong>شهاداتي</strong>، والمزيد عبر
          الرابط
          التالي:
            "
            ?>

        </p>
        <a href="https://drive.google.com/drive/u/0/folders/14OHQjPXWy4fpqx-qvVO9KVZcPWDCQHkm" target="_blank"
          class="inline-block bg-main text-white py-2 px-4 rounded-lg hover:bg-gray-700">

          <?= $isEn ?
            "
          View Files on Google
          Drive
            " :
            "
          اعرض الملفات على جوجل
          درايف
            "
            ?>
        </a>
      </section>

      <section>
        <h1 class="text-center text-main text-2xl p-5">
          <?= $isEn ?
            "
          Thanks For Your Time
            " :
            "
          شكرا لك على وقتك
            "
            ?>

        </h1>
      </section>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-main w-full grid it-ce text-white  shadow-[0px_-3px_3px_0px_rgb(0,0,0,0.5)] py-10">

    <p class="text-center">
      <?= $isEn ? "Designed & Developed & Deployed By" : "تم تصميمه وتطويره واستضافته بواسطة" ?>
      <br class="grid sm:hidden">
      <span class="font-black italic text-2xl">
        <?= $isEn ? "Ali Hussein" : "علي حسين" ?>
      </span>
      &copy;
      <script>
        document.write(new Date(Date.now()).getFullYear());
      </script>
      <br class="grid sm:hidden">
      <?= $isEn ? " All Rights Reserved " : "جميع الحقوق محفوظة " ?>
    </p>

  </footer>
</body>

</html>