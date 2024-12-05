<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCampAbout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <!-- Navbar -->
  <header class="bg-green-600 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <div class="flex items-center space-x-2">
        <img src="https://via.placeholder.com/40" alt="Logo" class="h-10 w-10">
        <h1 class="text-lg font-bold">GoCamp</h1>
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

  <!-- About Section -->
  <section id="about" class="bg-white py-16">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
      <div class="md:w-1/2">
        <img src="https://via.placeholder.com/500x300" alt="Camping Gear" class="rounded-lg shadow-md">
      </div>
      <div class="md:w-1/2 md:pl-12 mt-8 md:mt-0">
        <h2 class="text-3xl font-bold text-green-700 mb-4">About GoCamp</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
          GoCamp is the ultimate destination for outdoor enthusiasts seeking high-quality equipment to elevate their camping experience. 
          Our collection is designed to cater to adventurers of all kinds, featuring both essential tools and innovative gadgets.
        </p>
        <p class="text-gray-600 leading-relaxed mb-4">
          As a leader in the industry, GoCamp prides itself on delivering reliable and durable camping gear for all outdoor activities. 
          From beginner campers to seasoned adventurers, our products are crafted to ensure a safe and enjoyable outdoor journey.
        </p>
        <p class="text-gray-600 leading-relaxed">
          Discover our extensive range, including tents, sleeping bags, and cooking equipment. Whether you’re chasing a rustic camping 
          experience or modern conveniences, GoCamp has everything you need to make the great outdoors even greater.
        </p>
      </div>
    </div>
  </section>
</body>
</html>
