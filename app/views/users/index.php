<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Students Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
      align-items: flex-start;
      min-height: 100vh;
      background: #f1eef3ff;
      padding: 40px 20px;
      overflow-x: hidden;
      color: #dc53cfff;
    }

    /* Neon Background Bubbles */
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
      border-radius: 50%;
      background: rgba(255, 0, 255, 0.15);
      animation: animate 20s linear infinite;
      bottom: -150px;
    }

    .circles li:nth-child(1) { left: 25%; width: 100px; height: 100px; animation-duration: 15s; background: rgba(255,0,255,0.25); }
    .circles li:nth-child(2) { left: 10%; width: 40px; height: 40px; animation-duration: 12s; background: rgba(255,0,180,0.25); }
    .circles li:nth-child(3) { left: 70%; width: 60px; height: 60px; animation-duration: 20s; background: rgba(255,0,255,0.2); }
    .circles li:nth-child(4) { left: 40%; width: 120px; height: 120px; animation-duration: 25s; background: rgba(255,0,180,0.2); }
    .circles li:nth-child(5) { left: 65%; width: 50px; height: 50px; animation-duration: 18s; background: rgba(255,0,255,0.3); }
    .circles li:nth-child(6) { left: 75%; width: 150px; height: 150px; animation-duration: 30s; background: rgba(255,0,180,0.25); }
    .circles li:nth-child(7) { left: 35%; width: 180px; height: 180px; animation-duration: 35s; background: rgba(255,0,255,0.2); }
    .circles li:nth-child(8) { left: 50%; width: 70px; height: 70px; animation-duration: 28s; background: rgba(255,0,180,0.15); }
    .circles li:nth-child(9) { left: 20%; width: 30px; height: 30px; animation-duration: 10s; background: rgba(255,0,255,0.2); }
    .circles li:nth-child(10){ left: 85%; width: 200px; height: 200px; animation-duration: 40s; background: rgba(255,0,180,0.25); }

    @keyframes animate {
      0% { transform: translateY(0) scale(1); opacity: 0.8; }
      50% { transform: translateY(-500px) scale(1.2); opacity: 0.4; }
      100% { transform: translateY(-1000px) scale(1); opacity: 0; }
    }

    /* Dashboard Card */
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

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .dashboard-header h2 {
      font-size: 2em;
      font-weight: 700;
      color: #ff00ff;
      text-shadow: 0 0 5px #ff00ff, 0 0 15px #ff00ff, 0 0 30px #ff0099;
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

    /* Table Card */
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

    .pagination-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
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
  <!-- Background bubbles -->
  <ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
  </ul>

  <div class="dashboard-container">
    <div class="dashboard-header">
      <h2>
        <?= ($logged_in_user['role'] === 'admin') ? 'Admin Dashboard' : 'User Dashboard'; ?>
      </h2>
      <a href="<?=site_url('auth/logout'); ?>"><button class="logout-btn">Logout</button></a>
    </div>

    <?php if(!empty($logged_in_user)): ?>
      <div class="user-status mb-3">
        <strong>Welcome:</strong> <?= html_escape($logged_in_user['username']); ?>
      </div>
    <?php else: ?>
      <div class="user-status error mb-3">
        Logged in user not found
      </div>
    <?php endif; ?>

    <!-- Search + Table -->
    <div class="table-card">
      <form action="<?=site_url('users');?>" method="get" class="d-flex mb-3 search-form">
        <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
        <input name="q" type="text" class="form-control me-2" placeholder="Search" value="<?=html_escape($q);?>">
        <button type="submit">Search</button>
      </form>

      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <?php if ($logged_in_user['role'] === 'admin'): ?>
              <th>Password</th>
              <th>Role</th>
            <?php endif; ?>
            <th>Action</th>
          </tr>
          <?php foreach ($user as $user): ?>
          <tr>
            <td><?=html_escape($user['id']); ?></td>
            <td><?=html_escape($user['username']); ?></td>
            <td><?=html_escape($user['email']); ?></td>
            <?php if ($logged_in_user['role'] === 'admin'): ?>
              <td>*******</td>
              <td><?= html_escape($user['role']); ?></td>
            <?php endif; ?>
            <td>
              <a href="<?=site_url('/users/update/'.$user['id']);?>" class="btn-action btn-update">Update</a>
              <a href="<?=site_url('/users/delete/'.$user['id']);?>" class="btn-action btn-delete">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>

      <div class="pagination-container">
        <?php echo $page; ?>
      </div>
    </div>

    <a href="<?=site_url('users/create'); ?>" class="btn-create">+ Create New User</a>
  </div>
</body>
</html>
