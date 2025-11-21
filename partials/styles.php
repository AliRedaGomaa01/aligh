  <!-- Tailwind -->
  <script src="/tailwind.js"></script>
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
          .link { @apply bg-main text-white  border border-transparent }
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