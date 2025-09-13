<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-100 via-cyan-100 to-sky-200 min-h-screen flex items-center justify-center p-6">

  <div class="bg-gradient-to-br from-white via-sky-50 to-teal-50 p-8 rounded-2xl shadow-2xl w-full max-w-md border border-cyan-200 transform transition hover:scale-[1.01] hover:shadow-sky-300/70">
    <h1 class="text-3xl font-extrabold text-center mb-8 text-teal-600 uppercase tracking-wide drop-shadow-md">Create User</h1>

    <form action="<?= site_url('users/create'); ?>" method="POST" class="space-y-6">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold text-teal-700 mb-1">Username</label>
        <input 
          type="text" 
          name="username" 
          id="username" 
          required 
          class="w-full px-4 py-2 border border-cyan-300 rounded-md shadow-inner bg-white/80 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-400 transition"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-teal-700 mb-1">Email</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          class="w-full px-4 py-2 border border-cyan-300 rounded-md shadow-inner bg-white/80 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-400 transition"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-gradient-to-r from-teal-400 to-cyan-400 hover:from-teal-500 hover:to-cyan-500 text-white font-bold py-3 px-4 rounded-lg shadow-lg shadow-cyan-300/50 transform hover:-translate-y-1 hover:shadow-xl transition duration-300"
      >
        Save
      </button>
    </form>
  </div>

</body>
</html>
