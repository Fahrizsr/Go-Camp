<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCampHomepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <!-- Navbar -->
  <header class="bg-green-600 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <div class="flex items-center space-x-2">
        <img src="https://via.placeholder.com/40" alt="Logo" class="h-10 w-10">
        <h1 class="text-lg font-bold">Camping Store</h1>
      </div>
      <nav>
        <ul class="flex space-x-6 text-sm font-medium">
          <li><a href="/homepage" class="hover:text-gray-200">Home</a></li>
          <li><a href="/about" class="hover:text-gray-200">About</a></li>
          <li><a href="/products" class="hover:text-gray-200">Products</a></li>
          <li><a href="#" class="hover:text-gray-200">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-white py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 text-center md:text-left">
        <h2 class="text-3xl font-bold text-gray-800">
          Discover the Wilderness
        </h2>
        <h1 class="text-4xl font-extrabold text-purple-700 mt-2">
          Quality Camping Gear <br> for a Lifetime of Adventures.
        </h1>
        <p class="text-gray-600 italic mt-4">
          "Embark on the Adventure with Our Premium Camping Gear"
        </p>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0">
        <img src="https://via.placeholder.com/500x300" alt="Camping Gear" class="rounded-lg shadow-md">
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="bg-gray-50 py-12">
    <div class="container mx-auto px-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">About Our Camping Gear</h2>
      <p class="text-gray-600 leading-relaxed">
        Our journey began in the realm of outdoor exploration, and we’ve evolved extensively since our inception in the 1970s. 
        Crafted from meticulously chosen materials, including top-tier fabrics and premium hardware, our camping equipment boasts 
        unparalleled quality. We source inspiration from the natural wonders of Indonesia, incorporating fresh ideas into the 
        design to bring the best experience for adventurers.
      </p>
    </div>
  </section>
</body>
</html>
