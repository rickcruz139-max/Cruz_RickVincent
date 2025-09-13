<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create User</title>
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

    /* Input focus with teal glow */
    input:focus {
      box-shadow: 0 0 8px 2px #14b8a6;
      border-color: #14b8a6;
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

    /* Heading style */
    h1 {
      color: #a78bfa; /* lighter purple */
      text-shadow: 0 0 6px #a78bfa;
    }

    /* Label color */
    label {
      color: #94a3b8; /* cool gray */
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

  <!-- Particles background -->
  <div id="particles-js"></div>

  <div class="card-3d p-8 w-full max-w-md">
    <h1 class="text-3xl font-bold text-center mb-8 uppercase tracking-wide">Create User</h1>

   <form action="/index.php/users/create" method="POST" class="space-y-6">
      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-semibold mb-1">Username</label>
        <input 
          type="text" 
          name="username" 
          id="username" 
          required 
          class="w-full px-4 py-2 rounded-md focus:outline-none transition"
        >
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold mb-1">Email</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          required 
          class="w-full px-4 py-2 rounded-md focus:outline-none transition"
        >
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full btn-gradient text-white font-semibold py-2 px-4 rounded-md shadow transition duration-300"
      >
        Save
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
