<!-- Showcase -->
<section class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
  <div class="overlay"></div>
  <div class="container mx-auto text-center z-10">
    <h2 class="text-4xl text-white font-bold mb-4">Find Your Dream Job</h2>
    <form class="mb-4 mx-5 md:mx-auto">
      <div class="flex flex-col md:flex-row md:items-center md:justify-center gap-2">
        <span style="position:relative; display:block;">
          <i class="fa-solid fa-magnifying-glass"
            style="position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#94a3b8; pointer-events:none;"></i>
          <input type="text" name="keywords" placeholder="Keywords"
            class="w-full py-2 focus:outline-none" style="padding-left:34px; padding-right:12px;" />
        </span>
        <span style="position:relative; display:block;">
          <i class="fa-solid fa-location-dot"
            style="position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#94a3b8; pointer-events:none;"></i>
          <input type="text" name="location" placeholder="Location"
            class="w-full py-2 focus:outline-none" style="padding-left:34px; padding-right:12px;" />
        </span>
        <button class="w-full md:w-auto bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 focus:outline-none">
          <i class="fa-solid fa-magnifying-glass"></i> Search
        </button>
      </div>
    </form>
  </div>
</section>