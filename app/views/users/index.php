<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Create User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
/* Darker Background with Soft Green Blobs */
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(135deg, #1e2f28, #2e3f35);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  overflow: hidden;
  position: relative;
  color: #e0f2f1;
}

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
  background: #81c784;
  top: -100px;
  left: -100px;
}

body::after {
  width: 500px;
  height: 500px;
  background: #4db6ac;
  bottom: -120px;
  right: -100px;
}

/* Card Form */
.card {
  background: #263a33;
  border-radius: 16px;
  padding: 40px 30px;
  width: 400px;
  box-shadow: 0 8px 30px rgba(0,0,0,0.3);
  position: relative;
  z-index: 1;
  text-align: center;
}

.card h2 {
  font-size: 26px;
  font-weight: 700;
  color: #a5d6a7;
  margin-bottom: 25px;
  letter-spacing: 1px;
}

/* Form Controls */
.form-control {
  background: #374940;
  border: 1px solid #4caf50;
  color: #fff;
  padding: 12px;
  border-radius: 8px;
}

.form-control:focus {
  background: #455a49;
  border-color: #66bb6a;
  color: #fff;
  box-shadow: 0 0 8px rgba(102, 187, 106, 0.6);
}

label {
  color: #a5d6a7;
  font-weight: 600;
  font-size: 14px;
  margin-bottom: 6px;
  text-align: left;
  display: block;
}

/* Save Button */
.btn-save {
  margin-top: 20px;
  background: linear-gradient(90deg, #66bb6a, #388e3c);
  border: none;
  color: #fff;
  font-weight: 600;
  padding: 12px;
  width: 100%;
  border-radius: 8px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.btn-save:hover {
  background: linear-gradient(90deg, #81c784, #2e7d32);
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.25);
}
  </style>
</head>
<body>
  <div class="card">
    <h2>CREATE USER</h2>
    <form method="post" action="<?= site_url('users/store'); ?>">
      <div class="mb-3 text-start">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3 text-start">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn-save">Save</button>
    </form>
  </div>
</body>
</html>
