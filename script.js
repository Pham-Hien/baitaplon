const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
  // Kiểm tra xem mật khẩu đang ẩn hay hiển thị
  const type = passwordInput.type === "password" ? "text" : "password";
  passwordInput.type = type;

  // Thay đổi icon
  if (type === "password") {
    togglePassword.classList.remove("fa-solid fa-eye");
    togglePassword.classList.add("fa-solid fa-eye");
  } else {
    togglePassword.classList.remove("fa-solid fa-eye");
    togglePassword.classList.add("fa-solid fa-eye");
  }
});
