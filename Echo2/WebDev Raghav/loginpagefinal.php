<?php 
  session_start();

  include("db_connect.php");
  if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in']){
      if($_SESSION['BS'] == 0){
        header("Location:../WebDev Darshan/HOME.php");
        exit;
      }
      else{
        header("location:../WebDev Pulkit/Home.php");
        exit;
      }
    }
  }
  else{
    if(isset($_POST["submit"])){
      $name = $_POST['username'];
      $pass = $_POST['password'];


      $sql = "select a.user_id, user_name, B_S from credentials as a, userProfile as b where a.user_id = b.user_id and a.user_name = '$name';";
      $num = mysqli_query($connection, $sql);
      $row = mysqli_fetch_assoc($num);
      $user = $row['user_id'];
      $sql = "select password from credentials where user_id = '$user';";
      $num2 = mysqli_query($connection, $sql);
      $row2 = mysqli_fetch_assoc($num2);
      $hashpass = $row2['password'];
      $verify = password_verify($pass, $hashpass);

      if($verify){
        $BS = $row['B_S'];     
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['BS'] = $row['B_S'];
       
        $_SESSION['logged_in'] = true;
        if($BS == 0){
          // header("Location:../WebDev Darshan/HOME.php");
          header("Location:../WebDev Darshan/home.php");
          exit;
        }
        else{
          header("location:../WebDev Pulkit/Home.php");
          exit;
        }
      }
      else{
        header("Location: loginpagefinal.php?loginFailure=true");
      }    
    }
    
    if(isset($_POST['submit2'])){
      $username = $_POST['username'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phnum = $_POST['phnum'];
      $userAdd = $_POST['userAdd'];
      $BS = $_POST['B_S'];
      $pass = $_POST['pass'];
      
      $hashPass = password_hash($pass, PASSWORD_DEFAULT);
      $userid = rand(1,999);

      $sql = "insert into credentials values('$userid', '$username', '$hashPass');";
      $sql2 = "insert into userProfile values('$userid', '$name', '$phnum', '$email', '$userAdd', '$BS');";
      $res = mysqli_query($connection, $sql);
      $res2 = mysqli_query($connection, $sql2);

      
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="newlogin.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  </head>
  
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="loginpagefinal.php" method = "post" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" autocomplete="username" placeholder="Username" required="yes">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" autocomplete="current-password" placeholder="Password" id="id_password" required="yes">
              <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
            </div>
            <a href="#" class="key use-keyboard-input">Virtual keyboard</a>
            <a class="pass" href="#">Forgot your password?</a>
            <button name = "submit" type = "submit" class="btn solid">Sign In</button>
          </form>

          <div id="login-failure-modal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Login Failure</h2>
              <p>Your login attempt was unsuccessful. Please try again.</p>
            </div>
          </div>
          <script src="modal.js"></script>

          <!-- <div id="login-failure-modal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Registration Successfull</h2>
              <p>Your account was successfully created.</br>Please log in again!</p>
            </div>
          </div> -->

          <!-- Include JavaScript to show/hide the modal -->
          


          <form action="loginpagefinal.php" class="sign-up-form" method = "post" id = "registrationForm">
            <h2 class="title">Register</h2>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-user"></i>
              <input type="text" name="name" autocomplete="name" placeholder="Name" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-user"></i>
              <input type="text" name="username" autocomplete="username" placeholder="Username" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" autocomplete="email" placeholder="Email" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-envelope"></i>
              <input type="number" name="phnum" autocomplete="phnum" placeholder="Phone Number" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-envelope"></i>
              <input type="text" name="userAdd" autocomplete="userAdd" placeholder="User Address" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-envelope"></i>
              <input type = "number" name="B_S" placeholder="Enter 0 for Buyer, 1 for Seller" required="yes">
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" autocomplete="current-password" placeholder="Password" id="id_reg" required="yes">
              <i class="far fa-eye" id="toggleReg" style="cursor: pointer;"></i>
            </div>
            <div class="input-field" style = "margin-top: 5px;">
              <i class="fas fa-lock"></i>
              <input type="password" name="conpass" autocomplete="current-password" placeholder="Confirm Password" id="id_reg2" required="yes">
              <i class="far fa-eye" id="toggleReg2" style="cursor: pointer;"></i>
            </div>

            <div id="passwordMismatch" class="hidden">
              <p>Password and confirm password do not match.</p>
            </div>

            <script src="mismatchPassScript.js"></script>

            <a href="#" class="key use-keyboard-input">Virtual keyboard</a>
            <a href="https://priva.reversecode.repl.co/tools/pass.html" class="pass" target="_blank">Generate a strong password</a>
            <label class="check">
              <input type="checkbox" checked="checked">
              <span class="checkmark">I accept the <a href="terms.html">terms and services</a></span>
            </label>
            <button name = "submit2" type="submit" value="Create account" class="btn solid" style = "margin-top: 2px;">Create Account</button>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>You don't have an account?</h3>
            <p>Create your account right now to follow people and like publications</p>
            <button class="btn transparent" id="sign-up-btn">Register</button>
          </div>
          <img src="" class="image" alt="">
        </div>
  
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <p>Login to see your notifications and post your favorite photos</p>
            <a href = "#"><button class="btn transparent" id="sign-in-btn">Sign in</button></a>
          </div>
          <img src="img/register.svg" class="image" alt="">
        </div>
      </div>
    </div>
  
    <script src="main.js"></script>
    <script src="keyboard/Keyboard.js"></script>
  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });

    const htmlEl = document.getElementsByTagName("html")[0];
    const currentTheme = localStorage.getItem("theme")
      ? localStorage.getItem("theme")
      : null;
    if (currentTheme) {
      htmlEl.dataset.theme = currentTheme;
    }
    const toggleTheme = (theme) => {
      htmlEl.dataset.theme = theme;
      localStorage.setItem("theme", theme);
    };

    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#id_password");

    togglePassword.addEventListener("click", function (e) {
      const type =
        password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });

    const toggleReg = document.querySelector("#toggleReg");
    const pass = document.querySelector("#id_reg");

    toggleReg.addEventListener("click", function (e) {
      const type = pass.getAttribute("type") === "password" ? "text" : "password";
      pass.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });

    // const toggleReg = document.querySelector("#toggleReg2");
    // const pass = document.querySelector("#id_reg2");

    // toggleReg.addEventListener("click", function (e) {
    //   const type = pass.getAttribute("type") === "password" ? "text" : "password";
    //   pass.setAttribute("type", type);
    //   this.classList.toggle("fa-eye-slash");
    // });

    // KEYBOARD

    const Keyboard = {
      elements: {
        main: null,
        keysContainer: null,
        keys: []
      },

      eventHandlers: {
        oninput: null,
        onclose: null
      },

      properties: {
        value: "",
        capsLock: false
      },

      init() {
        // Create main elements
        this.elements.main = document.createElement("div");
        this.elements.keysContainer = document.createElement("div");

        // Setup main elements
        this.elements.main.classList.add("keyboard", "keyboard--hidden");
        this.elements.keysContainer.classList.add("keyboard__keys");
        this.elements.keysContainer.appendChild(this._createKeys());

        this.elements.keys = this.elements.keysContainer.querySelectorAll(
          ".keyboard__key"
        );

        // Add to DOM
        this.elements.main.appendChild(this.elements.keysContainer);
        document.body.appendChild(this.elements.main);

        // Automatically use keyboard for elements with .use-keyboard-input
        document.querySelectorAll(".use-keyboard-input").forEach((element) => {
          element.addEventListener("focus", () => {
            this.open(element.value, (currentValue) => {
              element.value = currentValue;
            });
          });
        });
      },

      _createKeys() {
        const fragment = document.createDocumentFragment();
        const keyLayout = [
          "1",
          "2",
          "3",
          "4",
          "5",
          "6",
          "7",
          "8",
          "9",
          "0",
          "backspace",
          "q",
          "w",
          "e",
          "r",
          "t",
          "y",
          "u",
          "i",
          "o",
          "p",
          "caps",
          "a",
          "s",
          "d",
          "f",
          "g",
          "h",
          "j",
          "k",
          "l",
          "enter",
          "done",
          "z",
          "x",
          "c",
          "v",
          "b",
          "n",
          "m",
          ",",
          ".",
          "?",
          "space"
        ];

        // Creates HTML for an icon
        const createIconHTML = (icon_name) => {
          return `<i class="material-icons">${icon_name}</i>`;
        };

        keyLayout.forEach((key) => {
          const keyElement = document.createElement("button");
          const insertLineBreak =
            ["backspace", "p", "enter", "?"].indexOf(key) !== -1;

          // Add attributes/classes
          keyElement.setAttribute("type", "button");
          keyElement.classList.add("keyboard__key");

          switch (key) {
            case "backspace":
              keyElement.classList.add("keyboard__key--wide");
              keyElement.innerHTML = createIconHTML("⌫");

              keyElement.addEventListener("click", () => {
                this.properties.value = this.properties.value.substring(
                  0,
                  this.properties.value.length - 1
                );
                this._triggerEvent("oninput");
              });

              break;

            case "caps":
              keyElement.classList.add(
                "keyboard__key--wide",
                "keyboard__key--activatable"
              );
              keyElement.innerHTML = createIconHTML("⇪");

              keyElement.addEventListener("click", () => {
                this._toggleCapsLock();
                keyElement.classList.toggle(
                  "keyboard__key--active",
                  this.properties.capsLock
                );
              });

              break;

            case "enter":
              keyElement.classList.add("keyboard__key--wide");
              keyElement.innerHTML = createIconHTML("↵");

              keyElement.addEventListener("click", () => {
                this.properties.value += "\n";
                this._triggerEvent("oninput");
              });

              break;

            case "space":
              keyElement.classList.add("keyboard__key--extra-wide");
              keyElement.innerHTML = createIconHTML("⎵");

              keyElement.addEventListener("click", () => {
                this.properties.value += " ";
                this._triggerEvent("oninput");
              });

              break;

            case "done":
              keyElement.classList.add(
                "keyboard__key--wide",
                "keyboard__key--dark"
              );
              keyElement.innerHTML = createIconHTML("✓");

              keyElement.addEventListener("click", () => {
                this.close();
                this._triggerEvent("onclose");
              });

              break;

            default:
              keyElement.textContent = key.toLowerCase();

              keyElement.addEventListener("click", () => {
                this.properties.value += this.properties.capsLock
                  ? key.toUpperCase()
                  : key.toLowerCase();
                this._triggerEvent("oninput");
              });

              break;
          }

          fragment.appendChild(keyElement);

          if (insertLineBreak) {
            fragment.appendChild(document.createElement("br"));
          }
        });

        return fragment;
      },

      _triggerEvent(handlerName) {
        if (typeof this.eventHandlers[handlerName] == "function") {
          this.eventHandlers[handlerName](this.properties.value);
        }
      },

      _toggleCapsLock() {
        this.properties.capsLock = !this.properties.capsLock;

        for (const key of this.elements.keys) {
          if (key.childElementCount === 0) {
            key.textContent = this.properties.capsLock
              ? key.textContent.toUpperCase()
              : key.textContent.toLowerCase();
          }
        }
      },

      open(initialValue, oninput, onclose) {
        this.properties.value = initialValue || "";
        this.eventHandlers.oninput = oninput;
        this.eventHandlers.onclose = onclose;
        this.elements.main.classList.remove("keyboard--hidden");
      },

      close() {
        this.properties.value = "";
        this.eventHandlers.oninput = oninput;
        this.eventHandlers.onclose = onclose;
        this.elements.main.classList.add("keyboard--hidden");
      }
    };

    window.addEventListener("DOMContentLoaded", function () {
      Keyboard.init();
    });

  </script>
  </body>
</body>
</html>