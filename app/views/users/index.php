<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-100 via-cyan-100 to-sky-200 min-h-screen flex items-center justify-center p-6">

  <div class="bg-gradient-to-br from-white via-sky-50 to-teal-50 shadow-2xl rounded-2xl p-8 w-full max-w-6xl border border-cyan-200 transform transition hover:scale-[1.01] hover:shadow-sky-300/60">
    
    <!-- Header -->
    <h1 class="text-4xl font-extrabold text-center mb-10 text-teal-600 tracking-wide uppercase drop-shadow-md">User Records</h1>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg border border-cyan-200 shadow-md">
      <table class="min-w-full divide-y divide-cyan-200 text-sm text-gray-700">
        <thead class="bg-gradient-to-r from-teal-400 to-cyan-400 text-white text-sm uppercase tracking-wider shadow">
          <tr>
            <th class="px-6 py-4 text-left">ID</th>
            <th class="px-6 py-4 text-left">Username</th>
            <th class="px-6 py-4 text-left">Email</th>
            <th class="px-6 py-4 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-cyan-100">
          <?php foreach (html_escape($users) as $user): ?> 
            <tr class="hover:bg-cyan-50 transition duration-200">
              <td class="px-6 py-4 font-medium"><?= $user['id']; ?></td>
              <td class="px-6 py-4"><?= $user['username']; ?></td>
              <td class="px-6 py-4"><?= $user['email']; ?></td>
              <td class="px-6 py-4 text-center">
                <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                   class="text-teal-600 font-semibold hover:text-teal-800 transition">Update</a>
                |
                <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                   class="text-red-500 font-semibold hover:text-red-700 transition">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Create Button -->
    <div class="mt-8 text-center">
      <a href="<?= site_url('users/create');?>" 
         class="inline-block bg-gradient-to-r from-teal-400 to-cyan-400 hover:from-teal-500 hover:to-cyan-500 text-white px-6 py-3 rounded-lg shadow-lg shadow-cyan-300/50 font-semibold transition duration-300 transform hover:-translate-y-1 hover:shadow-xl">
        + Create New Record
      </a>
    </div>
    
  </div>
</body>
</html>
