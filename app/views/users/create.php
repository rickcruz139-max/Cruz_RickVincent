<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create User</title>
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
    <div class="bg-gray-900/90 backdrop-blur-md p-8 rounded-2xl shadow-[0_8px_15px_rgba(0,0,0,0.5)] w-full max-w-md">
      <h1 class="text-2xl font-bold text-center mb-6 text-blue-400 drop-shadow-md select-none">Create User</h1>

      <form action="/users/create" method="POST" class="space-y-6">
        
        <div>
          <label for="username" class="block font-medium text-gray-300 mb-1 select-none">Username</label>
          <input type="text" name="username" id="username" required 
                 class="w-full border border-gray-700 bg-gray-800 text-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-inner transition duration-200" />
        </div>

        <div>
          <label for="email" class="block font-medium text-gray-300 mb-1 select-none">Email</label>
          <input type="email" name="email" id="email" required 
                 class="w-full border border-gray-700 bg-gray-800 text-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-inner transition duration-200" />
        </div>

        <button type="submit" 
                class="w-full bg-gradient-to-r from-blue-700 to-blue-900 text-white font-bold py-3 px-4 rounded-lg shadow-[0_6px_0_0_rgb(29,78,216)] hover:shadow-[0_3px_0_0_rgb(29,78,216)] active:translate-y-1 active:shadow-none transition select-none">
          Save
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
