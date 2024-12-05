<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GoCampProducts</title>
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

  <!-- Products Section -->
  <section id="products" class="py-16 bg-white">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-green-700 text-center mb-8">Our Products</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Product Card -->
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Ransel Hiking Anak-anak MH100</h3>
          <p class="text-green-600 font-bold mt-2">Rp 170.000</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Kaus Hiking Anak MH550</h3>
          <p class="text-green-600 font-bold mt-2">Rp 120.000</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Jaket Fleece Hiking Anak</h3>
          <p class="text-green-600 font-bold mt-2">Rp 200.000</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Topi Mendaki Fisherman</h3>
          <p class="text-green-600 font-bold mt-2">Rp 115.000</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Sepatu Hiking Tali Anak</h3>
          <p class="text-green-600 font-bold mt-2">Rp 250.000</p>
        </div>
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/150" alt="Product" class="rounded-lg mb-4">
          <h3 class="text-lg font-semibold text-gray-700">Sandal Hiking Anak</h3>
          <p class="text-green-600 font-bold mt-2">Rp 390.000</p>
        </div>
      </div>
      <!-- Pagination -->
      <div class="flex justify-center mt-8">
        <nav class="flex space-x-2">
          <a href="#" class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700">1</a>
          <a href="#" class="px-3 py-2 bg-gray-200 rounded hover:bg-gray-300">2</a>
          <a href="#" class="px-3 py-2 bg-gray-200 rounded hover:bg-gray-300">3</a>
          <a href="#" class="px-3 py-2 bg-gray-200 rounded hover:bg-gray-300">Next</a>
        </nav>
      </div>
    </div>
  </section>
</body>
</html>
