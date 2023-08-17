const swithFormLogin = document.querySelector(".form-switch-login-btn");
const swithFormRegister = document.querySelector(".form-switch-register-btn");
const formRegister = document.querySelector(".form-register");
const formLogin = document.querySelector(".form-login");

swithFormRegister.addEventListener("click", () => {
  formRegister.classList.toggle("form-active");
  formRegister.classList.toggle("form-inactive");
  formLogin.classList.toggle("form-active");
  formLogin.classList.toggle("form-inactive");
});

swithFormLogin.addEventListener("click", () => {
  formLogin.classList.toggle("form-active");
  formLogin.classList.toggle("form-inactive");
  formRegister.classList.toggle("form-active");
  formRegister.classList.toggle("form-inactive");
});
