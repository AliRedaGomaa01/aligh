<!-- Tailwind -->
<script src="/tailwind.js"></script>
<script>
  // v 3.0 
  tailwind.config = {
    darkMode: false,
    theme: {
      extend: {
        fontFamily: {
          sans: "Times New Roman",
        },
        colors: {
          main: '#000000',
          purple7: '#481F67',
          gray4: '#CED7E1',
          white1: '#FFFFFF',
          black1: '#000000',
        }
      }
    }
  }
</script>
<style type="text/tailwindcss">
  @layer components {
      .box-colors {
        @apply: border-gray4;
      }

      .amiri-regular {
        font-family: "Amiri", serif;
        font-weight: 400;
        font-style: normal;
      }

      .amiri-bold {
        font-family: "Amiri", serif;
        font-weight: 700;
        font-style: normal;
      }

      .amiri-regular-italic {
        font-family: "Amiri", serif;
        font-weight: 400;
        font-style: italic;
      }

      .amiri-bold-italic {
        font-family: "Amiri", serif;
        font-weight: 700;
        font-style: italic;
      }

      .playfair-display-regular {
        font-family: "Playfair Display", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
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