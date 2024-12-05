<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoginRegister</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg w-80 text-center">
    <!-- Login Form -->
    <div id="login-form" class="block">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">LOGIN NOW</h2>
      <form onsubmit="handleLogin(event)">
        <input 
          type="email" 
          placeholder="Enter your email" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <input 
          type="password" 
          placeholder="Enter your password" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <button 
          type="submit" 
          class="w-full bg-green-400 text-white py-2 rounded-md hover:bg-green-500 transition duration-300"
        >
          Login Now
        </button>
        <p class="mt-4 text-sm text-gray-600">
          Don't have an account? 
          <a href="#" onclick="toggleForms()" class="text-green-400 hover:underline">Register now</a>
        </p>
      </form>
    </div>

    <!-- Register Form -->
    <div id="register-form" class="hidden">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">REGISTER NOW</h2>
      <form onsubmit="handleRegister(event)">
        <input 
          type="text" 
          placeholder="Enter your name" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <input 
          type="email" 
          placeholder="Enter your email" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <input 
          type="password" 
          placeholder="Enter your password" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <input 
          type="password" 
          placeholder="Confirm your password" 
          required 
          class="w-full px-4 py-2 mb-4 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-400"
        >
        <button 
          type="submit" 
          class="w-full bg-green-400 text-white py-2 rounded-md hover:bg-green-500 transition duration-300"
        >
          Register Now
        </button>
        <p class="mt-4 text-sm text-gray-600">
          Already have an account? 
          <a href="#" onclick="toggleForms()" class="text-green-400 hover:underline">Login now</a>
        </p>
      </form>
    </div>
  </div>

  <script>
    // Toggle between Login and Register forms
    function toggleForms() {
      const loginForm = document.getElementById('login-form');
      const registerForm = document.getElementById('register-form');
      loginForm.classList.toggle('hidden');
      registerForm.classList.toggle('hidden');
    }

    // Handle Login
    function handleLogin(event) {
      event.preventDefault(); // Prevent form submission
      window.location.href = "/homepage"; // Redirect to homepage
    }

    // Handle Register
    function handleRegister(event) {
      event.preventDefault(); // Prevent form submission
      alert("Registration successful! Redirecting to homepage...");
      href = "/user.homepage"; // Redirect to homepage
    }
  </script>
</body>
</html>
