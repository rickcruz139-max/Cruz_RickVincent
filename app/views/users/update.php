<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
      background: radial-gradient(circle at top, #1a001f, #2a0035, #3a004d);
      color: #fff;
      overflow: hidden;
    }

    /* Floating circles animation */
    .circles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: rgba(255, 105, 180, 0.25); /* pink glow */
      animation: animate 25s linear infinite;
      bottom: -150px;
      border-radius: 50%;
    }

    .circles li:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-duration: 15s; }
    .circles li:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-duration: 10s; }
    .circles li:nth-child(3) { left: 70%; width: 20px; height: 20px; animation-duration: 20s; }
    .circles li:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-duration: 18s; }
    .circles li:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-duration: 12s; }
    .circles li:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-duration: 25s; }
    .circles li:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-duration: 35s; }
    .circles li:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-duration: 45s; }
    .circles li:nth-child(9) { left: 20%; width: 15px; height: 15px; animation-duration: 11s; }
    .circles li:nth-child(10){ left: 85%; width: 150px; height: 150px; animation-duration: 30s; }

    @keyframes animate {
      0%   { transform: translateY(0) rotate(0deg); opacity: 1; }
      100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; }
    }

    /* Form Card */
    .form-card {
      width: 100%;
      max-width: 450px;
      background: rgba(50, 0, 70, 0.7);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(255, 105, 180, 0.4),
                  inset 0 0 20px rgba(255, 182, 193, 0.25);
      padding: 35px;
      text-align: center;
      z-index: 1;
      position: relative;
    }

    .form-card h1 {
      font-size: 1.8em;
      font-weight: 600;
      color: #ff8ad4;
      margin-bottom: 25px;
      text-shadow: 0 0 8px rgba(255, 182, 193, 0.8);
    }

    .form-group {
      margin-bottom: 18px;
      position: relative;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 12px 15px;
      font-size: 1em;
      border-radius: 50px;
      border: 2px solid transparent;
      outline: none;
      background: rgba(255,255,255,0.1);
      color: #fff;
      box-shadow: inset 0 0 8px rgba(255, 182, 193, 0.5);
      transition: 0.3s;
    }

    .form-group input:focus,
    .form-group select:focus {
      border-color: #ff69b4;
      box-shadow: 0 0 12px #ff69b4, inset 0 0 12px rgba(255, 182, 193, 0.7);
      background: rgba(255,255,255,0.15);
    }

    .toggle-password {
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 1.1em;
      color: #ff8ad4;
    }

    .btn-submit {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 50px;
      font-size: 1.1em;
      font-weight: 600;
      cursor: pointer;
      background: linear-gradient(135deg, #ff69b4, #ffb6c1);
      color: #fff;
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.5);
      transition: 0.3s;
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 20px rgba(255, 105, 180, 0.8),
                  0 0 40px rgba(255, 182, 193, 0.6);
    }

    .btn-return {
      display: block;
      margin-top: 18px;
      padding: 12px;
      border-radius: 50px;
      background: none;
      color: #ff8ad4;
      text-decoration: none;
      font-weight: 500;
      border: 1px solid #ff8ad4;
      transition: 0.3s;
    }

    .btn-return:hover {
      background: #ff8ad4;
      color: #000;
      box-shadow: 0 0 12px #ff69b4;
    }
  </style>
</head>
<body>
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

  <script>
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
