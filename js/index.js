const eye = document.querySelector(".pass");
const password = document.getElementById("password");

eye.addEventListener("click", () => {
  if (eye.classList.contains("pass_hide")) {
    eye.classList.remove("pass_hide");
    eye.classList.add("pass_show");

    password.type = "text";
  } else {
    eye.classList.remove("pass_show");
    eye.classList.add("pass_hide");

    password.type = "password";
  }
});
