console.log("hi");

const loginFormElement = document.querySelector("#loginForm");

loginFormElement.addEventListener("submit", (e) => {
  const usernameElement = document.querySelector("#username").value;
  const passwordElement = document.querySelector("#password").value;

  if (usernameElement == "" || passwordElement == "") {
    alert("niks ingevoerd");
    e.preventDefault();
  } else {
  }
});
