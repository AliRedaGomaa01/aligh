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
  <meta name="google-site-verification" content="p9BgvFqUG9DRMza4vhNQXgC9g5Tt2L5j2VTUXwupzSs" />
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
      darkMode: false,
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
          .it-ce { @apply justify-items-center items-center; }
          .link { @apply bg-main text-white  }
          .link:hover { @apply bg-white text-main border border-main  }
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

    <div class="bg-main w-full p-[4rem] text-white grid grid-cols-1 shadow-[0px_3px_3px_0px_rgb(0,0,0,0.5)]">
      <div class="grid grid-cols-2 justify-items-between items-center gap-5">
        <div class="">
          <img src="images/img.jpg" class=" h-[165px] w-[165px] rounded-full overflow-hidden" alt="Logo">
        </div>
        <div class="text-3xl grid grid-cols-1 gap-5  justify-items-end">
          <p class="text-center link px-4  py-2 rounded-xl">
            <a href="<?= $isEn ? '/?lang=ar' : '/?lang=en' ?>" class=""> <?= $isEn ? "العربية" : "English" ?></a>
          </p>
        </div>
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
              Welcome ♥
            " :
            '
            مرحبًا ♥
            '
            ?>
        </h1>
      </section>

      <section class="space-y-10">
        <p class="">
          <?= $isEn ?
            "
            I'm Ali Hussein from Egypt
          " :
            '
            أنا علي حسين من مصر.
            '
            ?>
        </p>
        <p class="">
          <?= $isEn ?
            "I'm a passionate software engineer and full-stack web & mobile app developer with a strong technical background." :
            ' أعمل بشغف كمهندس برمجيات ومطور كامل للواجهات الأمامية والخلفية لتطبيقات الويب والموبايل بمعرفة تقنية قوية.'
            ?>
        </p>
        <h2 class="text-2xl font-semibold ">
          <?= $isEn ?
            "About Me" :
            'نبذة عني'
            ?>
        </h2>
        <p class="text-lg leading-7">
          <?= $isEn ?
            "
            I hold a <strong>Bachelor’s degree in Communications and Electronics Engineering</strong> (2021).
            " :
            "
            حصلت على <strong>درجة البكالوريوس في هندسة الاتصالات والإلكترونيات</strong> عام 2021.
          "
            ?>
        </p>
        <p class="text-lg leading-7">
          <?= $isEn ?
            "
            I also have studied 1,500+ hours of programming and software development courses, earning multiple certifications along the way.
            " :
            "
            أيضا درست ما يزيد عن 
            <strong>+1500 
            ساعة من الكورسات</strong>
            في البرمجة وتطوير البرمجيات، بالإضافة إلى حصولي على العديد من الشهادات.
          "
            ?>
        </p>
        <p class="text-lg leading-7">
          <?= $isEn ?
            " Additionally, I have <strong>professional experience</strong> with software agencies, which is detailed in my CV. " :
            "
              أيضا أتمتع <strong>بخبرة احترافية</strong>
               في عدة شركات برمجية كما هو موضح بالتفصيل في سيرتي الذاتية.
            "
            ?>
        </p>
        <p class="text-lg leading-7">
          <?= $isEn ?
            "
            I highly value <strong>productivity and efficiency</strong>, so I minimize distractions by avoiding time-consuming social media platforms.
            " :
            "
            أحب <strong>الانتاجية والكفاءة</strong>
            في العمل . لذلك اقلل من منصات التواصل الاجتماعي  التي تستهلك الكثير من الوقت وتسبب التشتت.
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
            " :
            "
          <li>المعلومات الأساسية ومعلومات التواصل</li>
          <li>خبرة العمل</li>
          <li>المهارات التقنية</li>
          <li>المشاريع</li>
          <li>التعلم والكورسات</li>
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

      <section>
        <h1 class="text-center text-main text-2xl p-5">
          <?= $isEn ?
            "
          Thank you For Your Time
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