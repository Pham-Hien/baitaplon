<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Score Management</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="all.min.css">
</head>

<body>
   <div class="login-container">
      <h1 style="text-align: center;">Đăng nhập</h1>
      <form action="#" method="post">
         <div class="form-login">
            <input type="text" id="username" name="username" placeholder="Nhập mã sinh viên hoặc email" required>
         </div>
         <div class="form-login">
            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
            <i id="togglePassword" class="fa-solid fa-eye" onclick="togglePasswordVisibility()"></i>

         </div>
         <button type="submit" class="btn-grad">ĐĂNG NHẬP</button>
      </form>
      <div class="forget-link">
         <a href="#">Quên mật khẩu ?</a>
      </div>
   </div>
   <script src="../boostrap/js/bootstrap.bundle.min.js"></script>
   <script src="./script.js"></script>
</body>

</html>