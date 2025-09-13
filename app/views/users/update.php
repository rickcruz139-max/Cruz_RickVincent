<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-900 flex items-center justify-center min-h-screen p-6">

  <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 rounded-2xl shadow-2xl w-full max-w-md border border-gray-700 transform transition hover:scale-[1.01] hover:shadow-purple-700/40">
    <!-- Title -->
    <h1 class="text-3xl font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500 mb-8 uppercase tracking-wide drop-shadow-md">
      Update Record
    </h1>

    <!-- Form -->
    <form action="<?= site_url('users/update/' . segment(4)); ?>" method="POST" class="space-y-6">
      
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold text-gray-300 mb-1">Username</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-purple-400">
            <!-- Icon: User -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.969 9.969 0 0112 15c2.21 0 4.243.72 5.879 1.929M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </span>
          <input type="text" id="username" name="username" 
            value="<?= html_escape($user['username']); ?>" 
            required
            class="pl-10 block w-full px-4 py-2 border border-gray-700 rounded-md shadow-inner bg-gray-900/80 text-gray-200 placeholder-gray-500 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
        </div>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-purple-400">
            <!-- Icon: Mail -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l-4-4m4 4l-4 4m16-4h-8" />
            </svg>
          </span>
          <input type="email" id="email" name="email" 
            value="<?= html_escape($user['email']); ?>" 
            required
            class="pl-10 block w-full px-4 py-2 border border-gray-700 rounded-md shadow-inner bg-gray-900/80 text-gray-200 placeholder-gray-500 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition">
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-bold py-3 px-4 rounded-md shadow-lg shadow-green-700/40 transform hover:-translate-y-1 hover:shadow-xl transition duration-300">
        Update
      </button>
    </form>
  </div>

</body>
</html>
