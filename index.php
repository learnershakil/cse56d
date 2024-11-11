<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRAvell</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Playwrite+DE+Grund:wght@100..400&family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body {
        /* font-family: 'Oswald', sans-serif; */
        font-family: "Ubuntu", sans-serif;
      }

      .bg-primary {
        background-color: #f4e9e2;
      }

      .bg-dark-primary {
        background-color: #485665;
      }

      .text-color {
        color: black;
      }

      .text-dark-color {
        color: white;
      }

      .accent-color {
        color: #de6b48;
      }

      .hero-bg {
        background-image: url("https://wallpapercave.com/wp/wp4069431.jpg");
        background-size: cover;
        background-position: center;
        width: 100vw;
      }


      /* 2nd Section */

    @import url("https://fonts.googleapis.com/css2?family=Moderustic&family=SUSE:wght@600&display=swap");

    /* Custom Colors */


    .leela {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: var(--clr-white);
      font-family: 'Moderustic', sans-serif;
      font-weight: 400;
      
    }

    /* Additional Tailwind Configurations */
    .heading-text {
      font-family: "SUSE", sans-serif;
    }

    /* Custom image gallery styles */
    .image-gallery ul {
      display: flex;
      gap: -10px;
    }

    .image-gallery li {
      position: relative;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      overflow: hidden;
      transition: transform 0.2s;
      cursor: pointer;
    }

    .image-gallery li:hover {
      transform: translateY(-5px);
    }

    .image-gallery li span {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--clr-white);
      font-size: 0.6rem;
      background: rgba(0, 0, 0, 0.4);
    }

    /* Video overlay */
    .poster:after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      transition: opacity 1s ease;
      opacity: 0.8;
    }

    .poster-active:after {
      opacity: 0;
      pointer-events: none;
    }

    /* Tag Styles */
    .tag {
      position: absolute;
      bottom: -0.375rem;
      left: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--clr-white);
      padding: 0.5rem;
      border-top-right-radius: 1rem;
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      width: 100%;
      bottom: 0;
    }

    </style>
  </head>

  <body class="bg-primary text-color">
    <div class="container mx-[0]">
      <section class=" justify-between items-center py-5 px-2" >
        
        <nav class="flex static py-4">
          <h2
          class=" flex font-ubuntu text-6xl transition duration-500 hover:text-[#de6b48] cursor-pointer top-2 left-4 absolute font-bold"
        >
          TRAvell
        </h2>
          <ul class="flex space-x-12 font-ubuntu margin right-0 top-4 right-4 absolute text-2xl">
            <li>
              <a
                href="index.php"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >Home</a
              >
            </li>
            <li>
              <a
                href="tour.html"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >virtual tour</a
              >
            </li>
            <li>
              <a
                href="https://artsandculture.google.com/story/10-museums-you-can-explore-right-here-right-now/igKSKBBnEBSGKg"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >museums</a
              >
            </li>
            <li>
              <a
                href="research.html"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >research center</a
              >
            </li>
            <li>
              <a
                href="contact.php"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="login.html"
                class="transition duration-150 hover:text-[#de6b48] cursor-pointer hover:text-3xl"
                >Login</a
              >
            </li>
            <li>
                <button
            onclick="toggleTheme()"
            class="text-4xl transition duration-300 hover:scale-125"
          >
            <span id="light-theme">⛅</span>
            <span id="dark-theme" class="hidden">🌙</span>
          </button>
            </li>
          </ul>
        </nav>
      </section>

      <section
        class="flex flex-col items-center justify-center h-[93vh] hero-bg text-[#f4e9e2] text-center text-white"
      >
        <h1 class="font-playwrite text-5xl mb-4 transition duration-150 hover:text-[#f4e9e2] cursor-pointer hover:text-5xl text-[#de6b48]">virtual tour platform!</h1>
        <div class="flex flex-col items-center gap-4">
          <p class="font-oswald text-xl text- [#f4e9e2] hover:text-[#de6b48]" >Entire world is our family.</p>
        </div>
      </section>
    </div>
    <br><br>
    <div class="flex  min-h-screen leela">
      <main class="w-full mx-auto p-6">
        <!-- Heading Section -->
        <div
          class="flex flex-col md:flex-row md:justify-between gap-6 items-center mb-12 hover:text-[#de6b48] cursor-pointer"
        >
          <h1 class="text-4xl md:text-6xl font-bold heading-text">
            Tourist destinations <br />
          </h1>
          <aside class=" text-4xl text-black text-sm max-w-xs hover:text-[#de6b48]">
            <p>
              Our tours immerse you in the beauty of the Global world. Enjoy your
              time in more than 100 countries.
            </p>
            <p>Happy Journey !</p>
          </aside>
        
        </div>

        <!-- Card Section -->
        <div class="grid gap-8 md:grid-cols-3">
          <!-- Card 1 -->
          <div
            class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
          >
            <div class="relative w-full h-3/4">
              <img
                class="object-cover w-full h-full"
                src="taj.png"
                alt="Taj Mahal" 
              />
              
            </div>
            
            <p class="block text-center py-3  text-Black-600 font-bold text-1xl">Taj Mahal <span class="block text-center py-3 text-grey-600 font-medium">This wonder of the world was built by the Mughal Emperor Shah Jahan as a memorial for his beloved wife Mumtaz</span></p>
              <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium hover:bg-[#de6b48]">The city of lights and love.</p> -->
          </div>

          <!-- Card 2 -->
          <div
          class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
        >
          <div class="relative w-full h-3/4">
            <img
              class="object-cover w-full h-full"
              src="goldenTemple.png"
              alt="Golden Temple" 
            />
          </div>

          <p class="block text-center py-3  text-Black-600 font-bold text-1xl">Golden Temple, Amristar
          <span class="block text-center py-3 text-grey-600 font-medium">Golden Temple is considered to be the most important pilgrimage site amongst Sikhs and will leave you in awe with its jaw-dropping gold and marble edifice.</span></p>
            <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium">The city that never sleeps.</p> -->
        </div>

          <!-- Card 3 -->
          <div
            class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
          >
            <img
              class="object-cover w-full h-3/4"
              src="amerFort.png"
              alt="Amer Fort"
            />
            <div class="absolute bottom-2 right-2"> 
            </div>
            <p class="block text-center py-3  text-Black-600 font-bold text-1xl">Amer Fort
            <span class="block text-center py-3 text-grey-600 font-medium">Perched atop a hill and overlooking the Maota Lake, the red sandstone fort is now a UNESCO World Heritage Site and showcases a beautiful fusion of Mughal and Rajput architecture.</span></p>
              <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium">A city of tradition and technology.</p> -->
            >
          </div>
        </div>
        <br><br>
        <div
        class="flex flex-col md:flex-row md:justify-between gap-6 items-center mb-12 hover:text-[#de6b48] cursor-pointer"
      >
        <h1 class="text-4xl md:text-6xl font-bold heading-text">
          Museums tours <br />
        </h1>
        <aside class=" text-4xl text-black text-sm max-w-xs hover:text-[#de6b48]">
          <p>
            Our tours immerse you in the beauty of the Incredible INDIA. Enjoy your
            time in 29 States & 7 Union territories.
          </p>
          <p>Happy Journey !</p>
        </aside>
      
      </div>

      <!-- Card Section -->
      <div class="grid gap-8 md:grid-cols-3">
        <!-- Card 1 -->
        <div
          class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
        >
          <div class="relative w-full h-3/4">
            <img
              class="object-cover w-full h-full"
              src="cityPalace.png"
              alt="City Palace of Udaipur" 
            />
          </div>
          
          <p class="block text-center py-3  text-Black-600 font-bold text-1xl">City Palace of Udaipur


<span class="block text-center py-3 text-grey-600 font-medium">The City Palace of Udaipur is an architectural marvel that offers a captivating journey through history and culture.</span></p>
            <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium"> Emerald Blue and You</p> -->
        </div>

        <!-- Card 2 -->
        <div
        class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
      >
        <div class="relative w-full h-3/4">
          <img
            class="object-cover w-full h-full"
            src="Victoria.png"
            alt="Victoria Memorial Hall" 
          />
        </div>

        <p class="block text-center py-3  text-Black-600 font-bold text-1xl">Victoria Memorial Hall


<span class="block text-center py-3 text-grey-600 font-medium">Built in early 20th century in name of Queen Victoria this marvelous marble building is an architecture marvel. Must visit while in Kolkata.</span></p>
          <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium">Heaven on Earth</p> -->
      </div>

        <!-- Card 3 -->
        <div
          class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72 hover:bg-[#de6b48] text-black"
        >
          <img
            class="object-cover w-full h-3/4"
            src="jantar.png"
            alt="Jantar Mantar - Jaipur"
          />
          <div class="absolute bottom-2 right-2"> 
          </div>
          <p class="block text-center py-3  text-Black-600 font-bold text-1xl">Jantar Mantar - Jaipur


<span class="block text-center py-3 text-grey-600 font-medium">The Sense of Royalty.</span></p>
            <!-- <p class="block text-center py-3 bg-gray-50 text-grey-600 font-medium">The Sense of Royalty</p> -->
          >
        </div>
      </div>
      </main>
    </div>
    <div class="flex justify-center items-center min-h-screen leela ">
      <main class="w-full max-w-4xl mx-auto p-6">
        <!-- Heading Section -->
        <div
          class="flex flex-col md:flex-row md:justify-between gap-6 items-center mb-12 hover:text-[#de6b48] cursor-pointer"
        >
          <h1 class="text-4xl md:text-6xl font-bold heading-text">
            Mountains tours <br />& glamping
          </h1>
          <aside class="text-gray-400 text-sm max-w-xs">
            <p>
              Our tours immerse you in the beauty of the mountains. Enjoy your
              time with nature and guided day hikes.
            </p>
          </aside>
        </div>

    <!-- Card Section -->
    <div class="grid gap-8 md:grid-cols-3">
      <!-- Card 1 -->
      <div
        class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72"
      >
        <div class="relative w-full h-3/4">
          <img
            class="object-cover w-full h-full"
            src="https://plus.unsplash.com/premium_photo-1672115680958-54438df0ab82?q=80&w=1784&auto=format"
            alt="Awesome views"
          />
        </div>
        <a
          href="#"
          class="block text-center py-3 bg-gray-50 text-indigo-600 font-medium"
          >#Awesome views</a
        >
      </div>

      <!-- Video Card -->
      <div
        class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72"
      >
        <div class="relative w-full h-full poster">
          <iframe
            class="absolute inset-0 w-full h-full"
            src="https://www.youtube.com/embed/nZmO8B9rRik? controls=0"
            allowfullscreen
          ></iframe>
        </div>
        <a
          href="#"
          class="block text-center py-3 bg-gray-50 text-indigo-600 font-medium"
          >#Pet friendly</a
        >
      </div>

      <!-- Card 3 -->
      <div
        class="relative bg-white rounded-lg shadow-lg overflow-hidden h-72"
      >
        <img
          class="object-cover w-full h-3/4"
          src="https://images.unsplash.com/photo-1501554728187-ce583db33af7?q=80&w=1887&auto=format&fit=crop"
          alt="Hiking"
        />
        
        <a
         
          class="block text-center py-3 bg-gray-50 text-indigo-600 font-medium"
          >#Hiking</a
        >
      </div>
    </div>    
  </main>
</div>

<footer>
  <p>&copy; 2024 TRAvell</p>
</footer>

    <script>
      function toggleTheme() {
        const body = document.body;
        body.classList.toggle("bg-primary");
        body.classList.toggle("bg-dark-primary");
        body.classList.toggle("text-color");
        body.classList.toggle("text-dark-color");

        document.getElementById("light-theme").classList.toggle("hidden");
        document.getElementById("dark-theme").classList.toggle("hidden");

        const poster = document.querySelector(".poster");
        poster.addEventListener("click", () => {
          poster.classList.add("poster-active");
        });
      }
    </script>
  </body>
</html>