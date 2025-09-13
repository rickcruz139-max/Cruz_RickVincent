<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- particles.js library -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <style>
    /* Fullscreen particles container */
    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      z-index: -1;
      top: 0;
      left: 0;
      background: linear-gradient(135deg, #4ade80, #8b5cf6);
    }

    /* 3D card effect */
    .card-3d {
      background: #1e293b; /* dark slate */
      border-radius: 1rem;
      box-shadow:
        0 10px 20px rgba(139, 92, 246, 0.3),
        0 6px 6px rgba(0, 0, 0, 0.2);
      transform-style: preserve-3d;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #7c3aed; /* purple border */
    }
    .card-3d:hover {
      transform: perspective(600px) rotateX(8deg) rotateY(-8deg);
      box-shadow:
        0 20px 40px rgba(139, 92, 246, 0.5),
        0 12px 12px rgba(0, 0, 0, 0.3);
    }

    /* Heading style */
    h1 {
      color: #a78bfa; /* lighter purple */
      text-shadow: 0 0 6px #a78bfa;
    }

    /* Label color */
    label {
      color: #94a3b8; /* cool gray */
    }

    /* Input styles */
    input {
      background-color: #334155; /* slate-700 */
      color: #e0e7ff; /* light text */
      border-color: #7c3aed; /* purple border */
      transition: box-shadow 0.3s ease, border-color 0.3s ease;
    }
    input::placeholder {
      color: #94a3b8;
    }
    input:focus {
      box-shadow: 0 0 8px 2px #14b8a6;
      border-color: #14b8a6;
      outline: none;
      background-color: #1e293b;
      color: #dbeafe;
    }

    /* Icon color */
    .input-icon {
      color: #94a3b8;
    }

    /* Button gradient */
    .btn-gradient {
      background: linear-gradient(90deg, #14b8a6, #8b5cf6);
      box-shadow: 0 4px 15px rgba(20, 184, 166, 0.6);
      transition: background 0.3s ease;
    }
    .btn-gradient:hover {
      background: linear-gradient(90deg, #0f766e, #7c3aed);
      box-shadow: 0 6px 20px rgba(124, 58, 237, 0.7);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

  <!-- Particles background -->
  <div id="particles-js"></div>

  <div class="card-3d p-8 w-full max-w-md">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center mb-8 uppercase tracking-wide">Update Record</h1>

    <!-- Form -->
   <form action="/users/update/<?= $user['id']; ?>" method="POST" class="space-y-6">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold mb-1">Username</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 input-icon">
            <!-- Icon: User -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9.969 9.969 0 0112 15c2.21 0 4.243.72 5.879 1.929M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </span>
          <input type="text" id="username" name="username" 
            value="<?= html_escape($user['username']); ?>" 
            required
            class="pl-10 block w-full px-4 py-2 rounded-md shadow-sm focus:ring-0 transition"
          >
        </div>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold mb-1">Email</label>
        <div class="relative">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3 input-icon">
            <!-- Icon: Mail -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m0 0l-4-4m4 4l-4 4m16-4h-8" />
            </svg>
          </span>
          <input type="email" id="email" name="email" 
            value="<?= html_escape($user['email']); ?>" 
            required
            class="pl-10 block w-full px-4 py-2 rounded-md shadow-sm focus:ring-0 transition"
          >
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full btn-gradient text-white font-semibold py-3 px-4 rounded-md shadow transition duration-300">
        Update
      </button>
    </form>
  </div>

  <script>
    /* particles.js config */
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
          "value": ["#8b5cf6", "#14b8a6", "#a78bfa"]
        },
        "shape": {
          "type": "circle"
        },
        "opacity": {
          "value": 0.3,
          "random": true,
          "anim": {
            "enable": true,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 4,
          "random": true,
          "anim": {
            "enable": false
          }
        },
        "move": {
          "enable": true,
          "speed": 1.5,
          "direction": "none",
          "random": true,
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
            "enable": false
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 0.3
            }
          }
        }
      },
      "retina_detect": true
    });
  </script>
</body>
</html>
