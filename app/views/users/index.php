<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Records</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- particles.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <style>
    /* Fullscreen particle background */
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      z-index: 0;
      top: 0;
      left: 0;
      background: linear-gradient(135deg, #1e293b, #0f172a);
    }
    /* Make sure the content is above particles */
    .content-container {
      position: relative;
      z-index: 10;
    }
  </style>
</head>
<body>

  <!-- Particle background -->
  <div id="particles-js"></div>

  <div class="content-container flex items-center justify-center min-h-screen px-4">
    <div class="bg-gray-900/90 backdrop-blur-md p-10 rounded-2xl shadow-[0_8px_15px_rgba(0,0,0,0.5)] w-full max-w-5xl border border-gray-700 flex flex-col">
      <!-- Header -->
      <h1 class="text-3xl font-extrabold text-center mb-8 text-blue-400 tracking-wide drop-shadow-md select-none">User  Records</h1>

      <div class="overflow-x-auto rounded-xl border border-gray-700 shadow-[0_4px_10px_rgba(59,130,246,0.3)]">
        <table class="w-full border-collapse text-gray-200">
          <thead>
            <tr class="bg-gradient-to-r from-blue-700 to-blue-900 text-white text-left select-none">
              <th class="px-6 py-3 border border-gray-700">ID</th>
              <th class="px-6 py-3 border border-gray-700">Username</th>
              <th class="px-6 py-3 border border-gray-700">Email</th>
              <th class="px-6 py-3 border border-gray-700">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-700">
            <?php foreach (html_escape($users) as $user): ?> 
              <tr class="hover:bg-blue-900/50 transition duration-200 cursor-default">
                <td class="px-6 py-3 border border-gray-700 text-center font-medium"><?= $user['id']; ?></td>
                <td class="px-6 py-3 border border-gray-700"><?= $user['username']; ?></td>
                <td class="px-6 py-3 border border-gray-700 text-gray-400"><?= $user['email']; ?></td>
                <td class="px-6 py-3 border border-gray-700 text-center space-x-3">
                  <a href="/users/update/<?= $user['id']; ?>" 
                    class="inline-block border border-blue-400 rounded px-3 py-1 text-blue-400 font-semibold hover:text-blue-300 hover:border-blue-300 transition shadow-[0_2px_0_0_rgb(59,130,246)] hover:shadow-[0_1px_0_0_rgb(59,130,246)] active:translate-y-0.5 active:shadow-none select-none">
                    Update
                  </a>
                  <a href="/users/delete/<?= $user['id']; ?>" 
                    class="inline-block border border-red-500 rounded px-3 py-1 text-red-500 font-semibold hover:text-red-400 hover:border-red-400 transition shadow-[0_2px_0_0_rgb(220,38,38)] hover:shadow-[0_1px_0_0_rgb(220,38,38)] active:translate-y-0.5 active:shadow-none select-none">
                    Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Create Button Container -->
      <div class="mt-8 flex justify-center">
        <a href="/users/create"
           class="inline-block bg-gradient-to-r from-blue-700 to-blue-900 text-white px-8 py-3 rounded-lg shadow-[0_6px_0_0_rgb(29,78,216)] hover:shadow-[0_3px_0_0_rgb(29,78,216)] active:translate-y-1 active:shadow-none font-bold transition select-none">
          + Create New Record
        </a>
      </div>
    </div>
  </div>

  <!-- Initialize particles.js -->
  <script>
    particlesJS('particles-js', {
      "particles": {
        "number": {
          "value": 60,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#3b82f6"
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.3,
          "random": true,
          "anim": {
            "enable": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#3b82f6",
          "opacity": 0.2,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 1.5,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 0.4
            }
          },
          "push": {
            "particles_nb": 4
          }
        }
      },
      "retina_detect": true
    });
  </script>

</body>
</html>
