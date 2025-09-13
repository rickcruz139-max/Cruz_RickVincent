<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-900 min-h-screen flex items-center justify-center p-6">

  <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 rounded-2xl shadow-2xl w-full max-w-md border border-gray-700 transform transition hover:scale-[1.01] hover:shadow-purple-700/40">
    <h1 class="text-3xl font-extrabold text-center mb-8 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500 uppercase tracking-wide drop-shadow-md">Create User</h1>

    <form action="<?= site_url('users/create'); ?>" method="POST" class="space-y-6">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold text-gray-300 mb-1">Username</label>
        <input 
          type="text" 
          name="username" 
          id="username" 
          required 
          class="w-full px-4 py-2 border border-gray-700 rounded-md shadow-inner bg-gray-900/80 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          class="w-full px-4 py-2 border border-gray-700 rounded-md shadow-inner bg-gray-900/80 text-gray-200 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg shadow-purple-700/40 transform hover:-translate-y-1 hover:shadow-xl transition duration-300"
      >
        Save
      </button>
    </form>
  </div>

</body>
</html>
