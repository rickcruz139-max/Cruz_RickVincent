<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Index</title>
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

    /* Table header style */
    thead {
      background-color: #7c3aed; /* purple */
      color: white;
    }

    /* Table row hover */
    tbody tr:hover {
      background-color: #334155; /* slate-700 */
      color: #a78bfa; /* lighter purple */
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Links style */
    a.update-link {
      color: #14b8a6; /* teal */
      font-weight: 600;
      transition: color 0.3s ease;
    }
    a.update-link:hover {
      color: #0f766e; /* darker teal */
    }
    a.delete-link {
      color: #f87171; /* red-400 */
      font-weight: 600;
      transition: color 0.3s ease;
    }
    a.delete-link:hover {
      color: #b91c1c; /* red-700 */
    }

    /* Create button gradient */
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

    /* Scrollbar for table overflow */
    .overflow-x-auto::-webkit-scrollbar {
      height: 8px;
    }
    .overflow-x-auto::-webkit-scrollbar-thumb {
      background: #7c3aed;
      border-radius: 4px;
    }
    .overflow-x-auto::-webkit-scrollbar-track {
      background: #1e293b;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative overflow-hidden">

  <!-- Particles background -->
  <div id="particles-js"></div>

  <div class="card-3d p-8 w-full max-w-6xl">
    
    <!-- Header -->
    <h1 class="text-4xl font-bold text-center mb-10 tracking-wide uppercase">User  Records</h1>

    <!-- Table -->
    <div class="overflow-x-auto rounded-lg border border-gray-700 shadow-sm">
      <table class="min-w-full divide-y divide-gray-600 text-sm text-gray-300">
        <thead class="text-sm uppercase tracking-wider">
          <tr>
            <th class="px-6 py-4 text-left">ID</th>
            <th class="px-6 py-4 text-left">Username</th>
            <th class="px-6 py-4 text-left">Email</th>
            <th class="px-6 py-4 text-center">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-700">
          <?php foreach (html_escape($users) as $user): ?> 
            <tr class="hover:cursor-pointer">
              <td class="px-6 py-4 font-medium"><?= $user['id']; ?></td>
              <td class="px-6 py-4"><?= $user['username']; ?></td>
              <td class="px-6 py-4"><?= $user['email']; ?></td>
              <td class="px-6 py-4 text-center">
                <a href="<?= site_url('users/update/'.$user['id']); ?>" 
                   class="update-link">Update</a>
                |
                <a href="<?= site_url('users/delete/'.$user['id']); ?>" 
                   class="delete-link">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Create Button -->
    <div class="mt-8 text-center">
      <a href="<?= site_url('users/create');?>" 
         class="inline-block btn-gradient text-white px-6 py-3 rounded-md shadow-md font-semibold transition duration-300">
        + Create New Record
      </a>
    </div>
    
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
