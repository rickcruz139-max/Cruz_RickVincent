<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Students Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
/* Background with gradient */
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(135deg, #2a003f, #1b0033);
  min-height: 100vh;
  margin: 0;
  padding: 20px;
  position: relative;
  overflow-x: hidden;
  color: #f3e5f5;
}

/* Gradient glow blobs */
body::before,
body::after {
  content: "";
  position: absolute;
  border-radius: 50%;
  filter: blur(120px);
  opacity: 0.2;
  z-index: 0;
}

body::before {
  width: 400px;
  height: 400px;
  background: #e91e63;
  top: -100px;
  left: -100px;
}

body::after {
  width: 500px;
  height: 500px;
  background: #3f51b5;
  bottom: -120px;
  right: -100px;
}

h1, .search-form, table, .btn-create, .pagination {
  position: relative;
  z-index: 1;
}

/* Header */
h1 {
  text-align: center;
  background: linear-gradient(90deg, #e91e63, #9c27b0, #3f51b5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 30px;
  font-size: 40px;
  font-weight: 800;
  letter-spacing: 1px;
}

/* Search Form */
.search-form {
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  margin-bottom: 20px;
}

.search-form .form-control {
  background: #2a1a3f;
  color: #fff;
  border: 1px solid #9c27b0;
}

.search-form .form-control::placeholder {
  color: #c5c5c5;
}

.search-form .btn-search {
  background: linear-gradient(90deg, #e91e63, #9c27b0);
  color: #fff;
  font-weight: 600;
  border: none;
  border-radius: 6px;
  padding: 10px 18px;
  transition: 0.3s ease;
}

.search-form .btn-search:hover {
  background: linear-gradient(90deg, #9c27b0, #3f51b5);
}

/* Table */
table {
  width: 95%;
  margin: 0 auto 40px;
  border-collapse: separate;
  border-spacing: 0 8px;
  background: transparent;
}

thead th {
  background: linear-gradient(90deg, #e91e63, #9c27b0, #3f51b5);
  color: #ffffff;
  padding: 16px;
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  border: none;
  border-radius: 8px 8px 0 0;
}

tbody tr {
  background: #2c1f38;
  border-radius: 12px;
  transition: all 0.2s ease;
}

tbody td {
  padding: 16px;
  font-size: 15px;
  color: #f3e5f5;
  border-top: 1px solid #1f1028;
  border-bottom: 1px solid #1f1028;
}

tbody tr:hover {
  background-color: #3d2a4d;
  transform: scale(1.005);
}

/* Action Buttons */
a.action-btn {
  display: inline-block;
  padding: 6px 14px;
  font-size: 13px;
  font-weight: 600;
  border-radius: 6px;
  text-decoration: none;
  transition: all 0.2s ease-in-out;
}

a.action-btn.update {
  background: linear-gradient(90deg, #9c27b0, #3f51b5);
  color: white;
}

a.action-btn.update:hover {
  background: linear-gradient(90deg, #3f51b5, #9c27b0);
}

a.action-btn.delete {
  background: linear-gradient(90deg, #e91e63, #9c27b0);
  color: white;
}

a.action-btn.delete:hover {
  background: linear-gradient(90deg, #9c27b0, #e91e63);
}

/* Create Button */
.btn-create {
  display: inline-block;
  padding: 12px 22px;
  background: linear-gradient(90deg, #e91e63, #9c27b0, #3f51b5);
  color: #fff;
  border-radius: 8px;
  font-weight: 600;
  font-size: 15px;
  text-decoration: none;
  transition: 0.3s ease;
}

.btn-create:hover {
  opacity: 0.9;
  transform: translateY(-2px);
}

/* Pagination */
.pagination {
  justify-content: center;
}

.pagination a,
.pagination strong {
  margin: 0 3px;
  padding: 8px 12px;
  border-radius: 6px;
  font-size: 14px;
  text-decoration: none;
  color: #ffffff !important;
  background: linear-gradient(90deg, #e91e63, #9c27b0, #3f51b5) !important;
  border: none !important;
}

.pagination a:hover {
  background: #fff !important;
  color: #9c27b0 !important;
}

.pagination strong {
  background: #fff !important;
  color: #9c27b0 !important;
}
  </style>
</head>
<body>
  <h1>Students Info</h1>

  <!-- Search -->
  <form action="<?= site_url('users'); ?>" method="get" class="search-form">
    <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
    <input class="form-control" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>" style="max-width: 300px;">
    <button type="submit" class="btn-search">Search</button>
  </form>

  <!-- Table -->
  <table class="table table-hover text-center align-middle">
    <thead>
      <tr>
        <th width="10%">ID</th>
        <th width="30%">Name</th>
        <th width="40%">Email</th>
        <th width="20%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($user as $users): ?>
        <tr>
          <td><?= html_escape($users['id']); ?></td>
          <td><?= html_escape($users['username']); ?></td>
          <td><?= html_escape($users['email']); ?></td>
          <td>
            <a href="<?= site_url('/users/update/'.$users['id']); ?>" class="action-btn update">Update</a>
            <a href="<?= site_url('/users/delete/'.$users['id']); ?>" class="action-btn delete" onclick="return confirm('Delete this user?');">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="d-flex justify-content-center">
    <?= $page; ?>
  </div>

  <!-- Create Button -->
  <div class="text-center mt-4">
    <a href="<?= site_url('users/create'); ?>" class="btn-create">+ Create New User</a>
  </div>
</body>
</html>
