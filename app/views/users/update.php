<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Update</title>
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
    /* Make sure the form container is above particles */
    .form-container {
      position: relative;
      z-index: 10;
    }
  </style>
</head>
<body>

  <!-- Particle background -->
  <div id="particles-js"></div>

  <div class="form-container flex items-center justify-center min-h-screen px-4">
    <div class="bg-gray-900/90 backdrop-blur-md p-8 rounded-2xl shadow-[0_8px_15px_rgba(0,0,0,0.5)] w-full max-w-md transform transition-all hover:scale-[1.02] hover:shadow-[0_12px_20px_rgba(0,0,0,0.7)]">
      <!-- Title -->
      <h1 class="text-3xl font-extrabold text-center text-blue-400 mb-2 drop-shadow-md">Update Record</h1>

      <!-- Form -->
      <form action="/users/update/<?= html_escape($user['id']); ?>" method="POST" class="space-y-5">
        
        <!-- Username -->
        <div>
          <label for="username" class="block text-sm font-semibold text-gray-300 mb-1">Username</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
              <!-- Icon: User -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9.969 9.969 0 0112 15c2.21 0 4.243.72 5.879 1.929M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </span>
            <input type="text" id="username" name="username" 
              value="<?= html_escape($user['username']); ?>" 
              required
              class="pl-10 block w-full px-4 py-3 border border-gray-700 bg-gray-800 text-gray-200 rounded-lg shadow-inner focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" />
          </div>
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-300 mb-1">Email</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
              <!-- Icon: Mail -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0l-4-4m4 4l-4 4m16-4h-8" />
              </svg>
            </span>
            <input type="email" id="email" name="email" 
              value="<?= html_escape($user['email']); ?>" 
              required
              class="pl-10 block w-full px-4 py-3 border border-gray-700 bg-gray-800 text-gray-200 rounded-lg shadow-inner focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" />
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit"
          class="w-full bg-gradient-to-r from-blue-700 to-blue-900 text-white font-bold py-3 px-4 rounded-lg shadow-[0_6px_0_0_rgb(29,78,216)] hover:shadow-[0_3px_0_0_rgb(29,78,216)] active:translate-y-1 active:shadow-none transition duration-300">
          Update
        </button>
      </form>
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
