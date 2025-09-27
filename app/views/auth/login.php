<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unique Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
      align-items: center;
      min-height: 100vh;
      background: radial-gradient(circle at top left, #1a0028, #0a0014 70%);
      overflow: hidden;
    }

    /* Glowing background orbs */
    .circles {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 25px;
      height: 25px;
      background: rgba(255, 0, 180, 0.15);
      animation: animate 20s linear infinite;
      bottom: -150px;
      border-radius: 50%;
      filter: blur(8px);
    }

    .circles li:nth-child(1) { left: 25%; width: 90px; height: 90px; background: rgba(255, 0, 180, 0.25); animation-duration: 15s; }
    .circles li:nth-child(2) { left: 10%; width: 30px; height: 30px; background: rgba(162, 0, 255, 0.2); animation-duration: 10s; }
    .circles li:nth-child(3) { left: 70%; width: 40px; height: 40px; background: rgba(255, 0, 180, 0.2); animation-duration: 20s; }
    .circles li:nth-child(4) { left: 40%; width: 70px; height: 70px; background: rgba(162, 0, 255, 0.25); animation-duration: 18s; }
    .circles li:nth-child(5) { left: 65%; width: 25px; height: 25px; background: rgba(255, 0, 180, 0.2); animation-duration: 12s; }
    .circles li:nth-child(6) { left: 75%; width: 120px; height: 120px; background: rgba(162, 0, 255, 0.25); animation-duration: 25s; }
    .circles li:nth-child(7) { left: 35%; width: 160px; height: 160px; background: rgba(255, 0, 180, 0.2); animation-duration: 35s; }
    .circles li:nth-child(8) { left: 50%; width: 30px; height: 30px; background: rgba(162, 0, 255, 0.2); animation-duration: 45s; }
    .circles li:nth-child(9) { left: 20%; width: 20px; height: 20px; background: rgba(255, 0, 180, 0.15); animation-duration: 11s; }
    .circles li:nth-child(10){ left: 85%; width: 150px; height: 150px; background: rgba(162, 0, 255, 0.3); animation-duration: 30s; }

    @keyframes animate {
      0% { transform: translateY(0) rotate(0deg); opacity: 1; }
      100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; }
    }

    /* Login Card */
    .login {
      position: relative;
      width: 380px;
      padding: 50px 40px;
      background: rgba(30, 0, 50, 0.6);
      border: 1px solid rgba(255, 0, 180, 0.3);
      border-radius: 20px;
      backdrop-filter: blur(18px);
      box-shadow: 0 0 25px rgba(162, 0, 255, 0.5);
      z-index: 1;
    }

    .login h2 {
      text-align: center;
      font-size: 2em;
      font-weight: 700;
      margin-bottom: 25px;
      color: #ff00b4;
      text-shadow: 0 0 15px #a200ff, 0 0 25px #ff00b4;
      letter-spacing: 1px;
    }

    .inputBox {
      position: relative;
      margin-bottom: 25px;
    }

    .inputBox input {
      width: 100%;
      padding: 14px 45px 14px 15px;
      font-size: 1em;
      color: #fff;
      background: rgba(255, 255, 255, 0.08);
      border: 2px solid transparent;
      outline: none;
      border-radius: 12px;
      transition: 0.3s;
    }

    .inputBox input:focus {
      border-color: #ff00b4;
      box-shadow: 0 0 10px #a200ff;
    }

    .inputBox input::placeholder {
      color: #aaa;
    }

    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 1.1em;
      color: #ff00b4;
    }

    .login button {
      width: 100%;
      padding: 14px;
      border: none;
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      color: #fff;
      font-size: 1.1em;
      font-weight: 600;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s;
      text-transform: uppercase;
      box-shadow: 0 0 15px rgba(162, 0, 255, 0.5);
    }

    .login button:hover {
      transform: scale(1.02);
      box-shadow: 0 0 25px #ff00b4, 0 0 35px #a200ff;
    }

    .group {
      text-align: center;
      margin-top: 15px;
    }

    .group p {
      color: #fff;
      font-size: 0.9em;
    }

    .group a {
      font-size: 0.95em;
      color: #a200ff;
      text-decoration: none;
    }

    .group a:hover {
      text-decoration: underline;
      color: #ff00b4;
    }

    /* Error Message */
    .error-box {
      background: rgba(255, 0, 80, 0.15);
      color: #ff7bce;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      text-align: center;
      font-size: 0.9em;
      border: 1px solid rgba(255, 0, 180, 0.3);
    }

  </style>
</head>
<body>
  <!-- Background circles -->
  <ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
  </ul>

  <!-- Login Card -->
  <div class="login">
    <h2>Login</h2>

    <?php if (!empty($error)): ?>
      <div class="error-box">
        <?= $error ?>
      </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('auth/login') ?>">
      <div class="inputBox">
        <input type="text" placeholder="Username" name="username" required>
      </div>

      <div class="inputBox">
        <input type="password" placeholder="Password" name="password" id="password" required>
        <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
      </div>

      <button type="submit">Login</button>
    </form>

    <div class="group">
      <p>
        Don't have an account? <a href="<?= site_url('auth/register'); ?>">Register here</a>
      </p>
    </div>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>