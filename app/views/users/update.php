<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    background: #0d001a;
    padding: 40px 20px;
    overflow-x: hidden;
    color: #fff;
  }

  /* Neon Background Circles */
  .circles {
    position: fixed;
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;
    left: 0;
    z-index: 0;
  }

  .circles li {
    position: absolute;
    display: block;
    list-style: none;
    width: 25px;
    height: 25px;
    background: rgba(255, 0, 255, 0.15);
    animation: animate 20s linear infinite;
    bottom: -150px;
    border-radius: 50%;
  }

  .circles li:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-duration: 15s; background: rgba(255,0,255,0.25); }
  .circles li:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-duration: 10s; background: rgba(255,0,180,0.2);}
  .circles li:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-duration: 20s; background: rgba(255,0,255,0.2);}
  .circles li:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-duration: 18s; background: rgba(255,0,180,0.25);}
  .circles li:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-duration: 12s; background: rgba(255,0,255,0.15);}
  .circles li:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-duration: 25s; background: rgba(255,0,180,0.2);}
  .circles li:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-duration: 35s; background: rgba(255,0,255,0.25);}
  .circles li:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-duration: 45s; background: rgba(255,0,180,0.15);}
  .circles li:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-duration: 11s; background: rgba(255,0,255,0.2);}
  .circles li:nth-child(10){ left: 85%; width: 150px; height: 150px; animation-duration: 30s; background: rgba(255,0,180,0.25); }

  @keyframes animate {
    0% { transform: translateY(0) rotate(0deg); opacity: 1; border-radius: 0; }
    100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; border-radius: 50%; }
  }

  /* Dashboard Container */
  .dashboard-container {
    position: relative;
    width: 100%;
    max-width: 1200px;
    padding: 30px;
    border-radius: 20px;
    background: rgba(20, 0, 40, 0.6);
    backdrop-filter: blur(18px);
    box-shadow: 0 0 30px rgba(255, 0, 255, 0.4);
    z-index: 1;
  }

  .dashboard-header h2 {
    font-size: 2em;
    font-weight: 700;
    color: #ff00ff;
    text-shadow: 0 0 15px #ff00ff;
  }

  .logout-btn {
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(90deg, #ff00ff, #ff0080);
    color: #fff;
    font-weight: 600;
    transition: 0.3s;
    box-shadow: 0 0 15px rgba(255,0,255,0.6);
  }
  .logout-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 25px rgba(255,0,200,0.9);
  }

  .user-status {
    padding: 12px 18px;
    border-radius: 10px;
    font-size: 14px;
    background: rgba(255, 0, 255, 0.08);
    border: 1px solid rgba(255, 0, 255, 0.3);
    color: #ff66ff;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(255,0,255,0.4);
  }

  .user-status.error {
    background: rgba(255, 65, 108, 0.1);
    border: 1px solid rgba(255, 65, 108, 0.3);
    color: #ff416c;
  }

  /* Table */
  .table-card {
    background: rgba(30, 0, 50, 0.5);
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 0 25px rgba(255,0,255,0.3);
  }

  th {
    background: linear-gradient(90deg, #ff00ff, #ff0080);
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 0 0 5px #ff00ff;
  }

  td {
    background: rgba(255,255,255,0.03);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    color: #fff;
    text-align: center;
  }

  a.btn-action {
    padding: 6px 14px;
    border-radius: 6px;
    font-size: 13px;
    margin: 0 2px;
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    transition: 0.3s;
  }

  a.btn-update {
    background: linear-gradient(90deg, #ff00ff, #ff66ff);
    box-shadow: 0 0 10px rgba(255,0,255,0.5);
  }
  a.btn-update:hover {
    box-shadow: 0 0 20px rgba(255,0,255,0.8);
  }

  a.btn-delete {
    background: linear-gradient(90deg, #ff416c, #ff0040);
    box-shadow: 0 0 10px rgba(255,65,108,0.5);
  }
  a.btn-delete:hover {
    box-shadow: 0 0 20px rgba(255,0,80,0.9);
  }

  .btn-create {
    width: 100%;
    padding: 14px;
    border: none;
    background: linear-gradient(90deg, #ff00ff, #ff0080);
    color: #fff;
    font-size: 1.1em;
    border-radius: 10px;
    font-weight: 600;
    transition: 0.3s;
    margin-top: 20px;
    box-shadow: 0 0 15px rgba(255,0,255,0.6);
  }
  .btn-create:hover {
    transform: translateY(-2px);
    box-shadow: 0 0 25px rgba(255,0,255,0.9);
  }

  .search-form input {
    border-radius: 8px;
    border: 1px solid rgba(255,0,255,0.4);
    background: rgba(255,255,255,0.08);
    color: #fff;
  }
  .search-form input:focus {
    outline: none;
    border: 1px solid #ff00ff;
    box-shadow: 0 0 10px #ff00ff;
    background: rgba(255,255,255,0.15);
  }

  .search-form button {
    background: #ff00ff;
    border: none;
    color: #fff;
    font-weight: 600;
    border-radius: 8px;
    padding: 8px 16px;
  }
  .search-form button:hover {
    box-shadow: 0 0 15px #ff00ff;
  }
</style>

</head>
<body>
  <div id="particles-js"></div>
  <ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
  </ul>

  <div class="form-card">
    <h1><i class="fa-solid fa-user-pen"></i> Update User</h1>
    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST">
      <div class="form-group">
        <input type="text" name="username" value="<?=html_escape($user['username']);?>" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" value="<?=html_escape($user['email']);?>" placeholder="Email" required>
      </div>
      
      <?php if(!empty($logged_in_user) && $logged_in_user['role'] === 'admin'): ?>
        <div class="form-group">
          <select name="role" required>
            <option value="user" <?= $user['role'] === 'user' ? 'selected' : ''; ?>>User</option>
            <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
          </select>
        </div>

        <div class="form-group">
          <input type="password" placeholder="Password" name="password" id="password" required>
          <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
        </div>
      <?php endif; ?>

      <button type="submit" class="btn-submit">Update User</button>
    </form>
    <a href="<?=site_url('/users');?>" class="btn-return"><i class="fa-solid fa-arrow-left"></i> Return to Home</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": { "value": 80 },
        "size": { "value": 3 },
        "color": { "value": "#c084fc" },
        "line_linked": { "enable": true, "distance": 150, "color": "#a855f7", "opacity": 0.4, "width": 1 },
        "move": { "enable": true, "speed": 2 }
      }
    });

    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    if(togglePassword){
      togglePassword.addEventListener('click', function () {
        const type = password.type === 'password' ? 'text' : 'password';
        password.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
      });
    }
  </script>
</body>
</html>
