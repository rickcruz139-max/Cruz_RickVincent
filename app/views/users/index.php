<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Students Info</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
/* Dark gradient background */
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background: radial-gradient(circle at top left, #0d0d14, #0a0a12);
  min-height: 100vh;
  margin: 0;
  padding: 30px;
  color: #e0d7ef;
}

/* Container Card */
.container-box {
  max-width: 1100px;
  margin: 0 auto;
  background: #131323;
  border-radius: 14px;
  box-shadow: 0 0 30px rgba(156, 39, 176, 0.3);
  padding: 25px;
}

/* Header Title */
h1 {
  text-align: center;
  font-weight: 700;
  font-size: 32px;
  background: linear-gradient(90deg, #e91e63, #9c27b0);
  background-clip: text;         /* ✅ Standard property */
  -webkit-background-clip: text; /* ✅ Webkit (Chrome, Edge, Safari) */
  -webkit-text-fill-color: transparent;
  color: transparent;            /* ✅ For Firefox */
  margin-bottom: 25px;
}

/* Search */
.search-form {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-bottom: 20px;
}

.search-form .form-control {
  background: #1e1e2e;
  border: 1px solid #3f3f5a;
  color: #fff;
  border-radius: 8px;
}

.search-form .form-control::placeholder {
  color: #888;
}

.search-form .btn-search {
  background: linear-gradient(90deg, #9c27b0, #e91e63);
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-weight: 600;
  border-radius: 8px;
  transition: 0.3s;
}

.search-form .btn-search:hover {
  opacity: 0.9;
}

/* Table */
table {
  border-collapse: separate;
  border-spacing: 0 10px;
  width: 100%;
}

thead th {
  background: #1f1f30;
  color: #cbbde8;
  padding: 14px;
  border: none;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 13px;
}

tbody tr {
  background: #1a1a28;
  border-radius: 12px;
  transition: 0.2s ease;
}

tbody tr:hover {
  background: #242437;
}

tbody td {
  padding: 14px;
  border-top: 1px solid #26263a;
  border-bottom: 1px solid #26263a;
  color: #e0d7ef;
}

/* Action Buttons */
a.action-btn {
  display: inline-block;
  padding: 6px 14px;
  font-size: 13px;
  font-weight: 600;
  border-radius: 6px;
  text-decoration: none;
  transition: 0.2s;
}

a.action-btn.update {
  background: linear-gradient(90deg, #3f51b5, #9c27b0);
  color: #fff;
}

a.action-btn.update:hover {
  opacity: 0.85;
}

a.action-btn.delete {
  background: linear-gradient(90deg, #e91e63, #9c27b0);
  color: #fff;
}

a.action-btn.delete:hover {
  opacity: 0.85;
}

/* Create Button */
.btn-create {
  display: inline-block;
  margin-top: 10px;
  padding: 12px 22px;
  background: linear-gradient(90deg, #9c27b0, #e91e63);
  color: #fff;
  border-radius: 8px;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

.btn-create:hover {
  opacity: 0.9;
  transform: translateY(-2px);
}

/* Pagination */
.pagination {
  justify-content: center;
  margin-top: 20px;
}

.pagination a,
.pagination strong {
  margin: 0 3px;
  padding: 8px 12px;
  border-radius: 6px;
  font-size: 14px;
  text-decoration: none;
  color: #fff !important;
  background: #2a2a3f !important;
  border: 1px solid #3f3f5a !important;
}

.pagination a:hover {
  background: linear-gradient(90deg, #e91e63, #9c27b0) !important;
}

.pagination strong {
  background: linear-gradient(90deg, #9c27b0, #3f51b5) !important;
}
  </style>
</head>
<body>
  <div class="container-box">
    <h1>Students Info</h1>

    <!-- Search -->
    <form action="<?= site_url('users'); ?>" method="get" class="search-form">
      <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
      <input class="form-control" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>" style="max-width: 280px;">
      <button type="submit" class="btn-search">Search</button>
    </form>

    <!-- Table -->
    <table class="table text-center align-middle">
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
  </div>
</body>
</html>
