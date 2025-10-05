<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update User</title>
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

    .form-container {
      position: relative;
      width: 380px;
      padding: 40px;
      border-radius: 15px;
      background: rgba(30, 0, 50, 0.6);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 0, 180, 0.3);
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.3),
                  0 0 40px rgba(162, 0, 255, 0.2);
      z-index: 1;
    }

    .form-container h1 {
      text-align: center;
      font-size: 2em;
      font-weight: 700;
      color: #ff00b4;
      margin-bottom: 25px;
      text-shadow: 0 0 15px #a200ff, 0 0 25px #ff00b4;
      letter-spacing: 1px;
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
      border-radius: 8px;
      border: 2px solid transparent;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      transition: 0.3s;
    }

    .form-group input::placeholder {
      color: #aaa;
    }

    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: #ff00b4;
      box-shadow: 0 0 8px #a200ff;
      background: rgba(255,255,255,0.15);
    }

    .btn-submit {
      width: 100%;
      padding: 14px;
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 1.1em;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 0 15px rgba(162, 0, 255, 0.5);
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.8), 0 0 40px rgba(162, 0, 255, 0.6);
    }
  </style>
</head>
<body>
  <!-- Background circles -->
  <ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
  </ul>

  <div class="form-container">
    <h1>Update User</h1>
    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST">
      <div class="form-group">
        <input type="text" name="username" value="<?=html_escape($user['username']);?>" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" value="<?=html_escape($user['email']);?>" placeholder="Email" required>
      </div>
      <div class="form-group">
        <select name="role" required>
          <option value="" disabled <?= (!isset($user['role']) || empty($user['role'])) ? 'selected' : '' ?>>Select Role</option>
          <option value="user" <?= (isset($user['role']) && $user['role'] === 'user') ? 'selected' : '' ?>>User </option>
          <option value="admin" <?= (isset($user['role']) && $user['role'] === 'admin') ? 'selected' : '' ?>>Admin</option>
        </select>
      </div>

      <button type="submit" class="btn-submit">Update User</button>
    </form>
  </div>
</body>
</html>
