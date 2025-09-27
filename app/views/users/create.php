<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User</title>
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
      height: 100vh;
      background: linear-gradient(135deg, #ff9ec4, #fba8c6, #ffd1e3);
      overflow: hidden;
      position: relative;
    }

    /* Circle decorations */
    .circle {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      animation: float 8s infinite ease-in-out;
    }

    .circle.small {
      width: 80px;
      height: 80px;
      top: 15%;
      left: 10%;
      animation-delay: 1s;
    }

    .circle.medium {
      width: 120px;
      height: 120px;
      bottom: 20%;
      right: 15%;
      animation-delay: 3s;
    }

    .circle.large {
      width: 200px;
      height: 200px;
      top: 50%;
      left: 60%;
      animation-delay: 5s;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0) scale(1);
      }
      50% {
        transform: translateY(-30px) scale(1.05);
      }
    }

    .container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border-radius: 30px;
      padding: 40px 50px;
      width: 380px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
      text-align: center;
      border: 2px solid rgba(255, 255, 255, 0.3);
      z-index: 10;
    }

    .container h2 {
      font-size: 26px;
      margin-bottom: 25px;
      color: #fff;
      font-weight: 700;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }

    .input-group {
      margin-bottom: 18px;
      text-align: left;
    }

    .input-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 8px;
      color: #fff;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 14px 20px;
      border: none;
      border-radius: 50px;
      outline: none;
      font-size: 15px;
      background: rgba(255, 255, 255, 0.8);
      box-shadow: inset 2px 2px 6px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }

    .input-group input:focus {
      background: #fff;
      box-shadow: 0 0 8px rgba(255, 77, 150, 0.6);
    }

    .btn {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      color: #fff;
      background: linear-gradient(135deg, #ff4d96, #ff6fb3);
      box-shadow: 0 4px 12px rgba(255, 77, 150, 0.4);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #ff6fb3, #ff4d96);
      box-shadow: 0 6px 16px rgba(255, 77, 150, 0.5);
      transform: translateY(-2px);
    }
  </style>
</head>
<body>
  <!-- Circle Decorations -->
  <div class="circle small"></div>
  <div class="circle medium"></div>
  <div class="circle large"></div>

  <!-- Form Container -->
  <div class="container">
    <h2>Create User</h2>
    <form>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter username" required />
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter email" required />
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter password" required />
      </div>
      <button type="submit" class="btn">Create</button>
    </form>
  </div>
</body>
</html>
