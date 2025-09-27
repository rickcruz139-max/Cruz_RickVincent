<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Poppins", sans-serif;
      background: radial-gradient(circle at top, #1a0033, #0a001a);
      color: #fff;
    }

    .form-card {
      width: 100%;
      max-width: 450px;
      background: rgba(30, 0, 60, 0.7);
      backdrop-filter: blur(12px);
      border-radius: 16px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.6),
                  inset 0 0 20px rgba(155, 0, 255, 0.3);
      padding: 35px;
      text-align: center;
    }

    .form-card h1 {
      font-size: 1.8em;
      font-weight: 600;
      color: #c084fc;
      margin-bottom: 25px;
      text-shadow: 0 0 8px rgba(192,132,252,0.7);
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
      border: none;
      outline: none;
      background: rgba(255,255,255,0.1);
      color: #fff;
      box-shadow: inset 0 0 8px rgba(192,132,252,0.5);
      transition: 0.3s;
    }

    .form-group input:focus,
    .form-group select:focus {
      box-shadow: 0 0 12px #9f7aea, inset 0 0 12px #9f7aea;
    }

    .toggle-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 1.1em;
      color: #c084fc;
    }

    .btn-submit {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 8px;
      font-size: 1.1em;
      font-weight: 500;
      cursor: pointer;
      background: linear-gradient(135deg, #7c3aed, #c084fc);
      color: #fff;
      box-shadow: 0 0 12px rgba(192,132,252,0.6);
      transition: 0.3s;
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 18px rgba(192,132,252,0.9);
    }

    .btn-return {
      display: block;
      margin-top: 18px;
      padding: 12px;
      border-radius: 8px;
      background: rgba(255,255,255,0.1);
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      box-shadow: inset 0 0 8px rgba(192,132,252,0.4);
    }

    .btn-return:hover {
      background: rgba(192,132,252,0.2);
      box-shadow: 0 0 12px rgba(192,132,252,0.6);
    }
  </style>
</head>
<body>
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
