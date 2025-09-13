<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-black to-gray-900 min-h-screen flex items-center justify-center p-6">

  <div class="bg-gradient-to-br from-gray-900 to-gray-800 shadow-2xl rounded-2xl p-8 w-full max-w-6xl border border-gray-700 transform transition hover:scale-[1.01] hover:shadow-purple-700/40">
    
    <!-- Header -->
    <h1 class="text-4xl font-extrabold text-center mb-10 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500 tracking-wide uppercase drop-shadow-md">
      User Records
    </h1>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg border border-gray-700 shadow-md">
      <table class="min-w-full divide-y divide-gray-700 text-sm text-gray-300">
        <thead class="bg-gradient-to-r from-purple-500 to-pink-500 text-white text-sm uppercase tracking-wider shadow">
          <tr>
            <th class="px-6 py-4 text-left">ID</th>
            <th class="px-6 py-4 text-left">Username</th>
            <th class="px-6 py-4 text-left">Email</th>
            <th class="px-6 py-4 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-800 bg-gray-900/80">
          <?php foreach (html_escape($users) as $user): ?> 
            <tr class="hover:bg-gray-800 transition duration-200">
              <td class="px-6 py-4 font-medium text-purple-300"><?= $user['id']; ?></td>
              <td class="px-6 py-4"><?= $user['username']; ?></td>
              <td class="px-6 py-4"><?= $user['email']; ?></td>
              <td class="px-6 py-4 text-center">
                <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                   class="text-green-400 font-semibold hover:text-green-500 transition">Update</a>
                |
                <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                   class="text-red-500 font-semibold hover:text-red-600 transition">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Create Button -->
    <div class="mt-8 text-center">
      <a href="<?= site_url('users/create');?>" 
         class="inline-block bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white px-6 py-3 rounded-lg shadow-lg shadow-green-700/40 font-semibold transition duration-300 transform hover:-translate-y-1 hover:shadow-xl">
        + Create New Record
      </a>
    </div>
    
  </div>
</body>
</html>
