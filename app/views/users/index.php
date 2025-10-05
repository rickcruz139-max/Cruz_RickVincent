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
      background: radial-gradient(circle at top left, #1a0028, #0a0014 70%);
      color: #fff;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* Animated background circles */
    .circles {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
      top: 0;
      left: 0;
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

    .dashboard-container {
      max-width: 1200px;
      margin: 50px auto;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .dashboard-header h2 {
      font-weight: 700;
      color: #ff00b4;
      text-shadow: 0 0 15px #a200ff, 0 0 25px #ff00b4;
      letter-spacing: 1px;
    }

    .logout-btn {
      padding: 10px 18px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
      box-shadow: 0 0 15px rgba(162, 0, 255, 0.5);
      text-decoration: none;
      display: inline-block;
    }
    .logout-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.8), 0 0 40px rgba(162, 0, 255, 0.6);
    }

    .user-status {
      padding: 12px 18px;
      border-radius: 10px;
      font-size: 14px;
      background: rgba(255, 0, 180, 0.1);
      border: 1px solid rgba(255, 0, 180, 0.3);
      color: #ff00b4;
      margin-bottom: 20px;
    }
    .user-status.error {
      background: rgba(255, 0, 180, 0.1);
      border: 1px solid rgba(255, 0, 180, 0.3);
      color: #ff00b4;
    }

    .table-card {
      background: rgba(30, 0, 50, 0.6);
      backdrop-filter: blur(12px);
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.3),
                  0 0 40px rgba(162, 0, 255, 0.2);
      border: 1px solid rgba(255, 0, 180, 0.3);
    }

    table {
      width: 100%;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 0;
    }

    th {
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      color: #fff;
      font-size: 14px;
      text-transform: uppercase;
      text-align: center;
      font-weight: 600;
    }

    td {
      background: rgba(255,255,255,0.05);
      border-bottom: 1px solid rgba(255,255,255,0.1);
      color: #fff;
      text-align: center;
      vertical-align: middle;
    }

    tr:hover td {
      background: rgba(255, 0, 180, 0.1);
    }

    a.btn-action {
      padding: 6px 14px;
      border-radius: 8px;
      font-size: 13px;
      margin: 0 2px;
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
      display: inline-block;
    }

    a.btn-update {
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      box-shadow: 0 0 10px rgba(162, 0, 255, 0.5);
    }
    a.btn-update:hover {
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.8), 0 0 40px rgba(162, 0, 255, 0.6);
      transform: translateY(-1px);
    }

    a.btn-delete {
      background: linear-gradient(90deg, #ff00b4, #a200ff);
      box-shadow: 0 0 10px rgba(255, 0, 180, 0.5);
    }
    a.btn-delete:hover {
      box-shadow: 0 0 20px rgba(162, 0, 255, 0.8), 0 0 40px rgba(255, 0, 180, 0.6);
      transform: translateY(-1px);
    }

    .btn-create {
      width: 100%;
      padding: 14px;
      border: none;
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      color: #fff;
      font-size: 1.1em;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
      margin-top: 20px;
      box-shadow: 0 0 15px rgba(162, 0, 255, 0.5);
      text-decoration: none;
      display: block;
      text-align: center;
    }
    .btn-create:hover {
      transform: translateY(-2px);
      box-shadow: 0 0 20px rgba(255, 0, 180, 0.8), 0 0 40px rgba(162, 0, 255, 0.6);
    }

    .pagination-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination-container .page-link {
      color: #ff00b4;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 0, 180, 0.3);
    }

    .pagination-container .page-link:hover {
      background: rgba(255, 0, 180, 0.2);
      box-shadow: 0 0 10px rgba(255, 0, 180, 0.5);
    }

    .pagination-container .page-item.active .page-link {
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      border-color: #ff00b4;
      color: #fff;
    }

    .search-form input {
      border-radius: 8px;
      border: 1px solid rgba(255, 0, 180, 0.4);
      background: rgba(30, 0, 50, 0.6);
      color: #fff !important;
      caret-color: #fff !important;
    }
    .search-form input::placeholder {
      color: #aaa !important;
    }
    .search-form input:focus {
      outline: none;
      border: 1px solid #ff00b4;
      box-shadow: 0 0 10px #a200ff;
      background: rgba(30, 0, 50, 0.8);
      color: #fff !important;
    }

    .search-form button {
      background: linear-gradient(90deg, #a200ff, #ff00b4);
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      padding: 8px 16px;
      transition: 0.3s;
    }
    .search-form button:hover {
      box-shadow: 0 0 15px rgba(162, 0, 255, 0.5);
      transform: translateY(-1px);
    }

    .table-responsive {
      border-radius: 10px;
      overflow: hidden;
    }

    /* Ensure all form controls have white text */
    .form-control {
      color: #fff !important;
    }
    .form-control::placeholder {
      color: #aaa !important;
    }
    .form-control:focus {
      color: #fff !important;
      background-color: rgba(30, 0, 50, 0.8) !important;
    }
  </style>
</head>
<body>
  <!-- Background circles -->
  <ul class="circles">
    <li></li><li></li><li></li><li></li><li></li>
    <li></li><li></li><li></li><li></li><li></li>
  </ul>

  <div class="dashboard-container">
    
    <div class="dashboard-header">
      <h2>
        <?= ($logged_in_user['role'] === 'admin') ? 'Admin Dashboard' : 'User    Dashboard'; ?>
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
        <table class="table table-bordered table-hover mb-0">
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
              <a href="<?=site_url('/users/delete/'.$user['id']);?>" class="btn-action btn-delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>