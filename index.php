<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
    <link
      rel="icon"
      type="image/jpg"
      href="https://hariketsheth-project1.42web.io/img/logo.ico"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
      $(document).bind("contextmenu", function (e) {
        e.preventDefault();
      });
      $(document).keydown(function (e) {
        if (e.which === 123) {
          return false;
        }
      });
    </script>
    <script language="text/javascript">
                    document.onmousedown=disableclick;
      		  status="Right Click Disabled";
      		  function disableclick(event){
      			  if(event.button==2) {
      				  alert(status);
      				  return false; }
      		  }
      .
    </script>
    <script>
      document.addEventListener("contextmenu", (event) =>
        event.preventDefault()
      );
      document.onkeydown = function (e) {
        if (event.keyCode == 123) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
          return false;
        }
        if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
          return false;
        }
      };
    </script>

    <title>Epitomia - Learn from Anywhere | Anytime</title>
  </head>
  <body oncontextmenu="return false;">

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form
            action="welcome.php"
            class="sign-in-form"
            id="loginform"
            method="POST"
          >
            <img src="img/delete-files.jpg" height="130" width="240" />
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>

              <input
                type="text"
                placeholder="Username"
                name="uname"
                autocomplete="off"
                autocapitalize="off"
                id="username"
              />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input
                type="password"
                placeholder="Password"
                name="pass"
                autocomplete="off"
                id="password"
              />
            </div>
            <small>
              Please Login using details sent on the registered mails
            </small>
            <br />
            <input
              type="submit"
              value="Login"
              name="login"
              class="bxtn solid"
              id="submit"
            />
          </form>
          <?php 
        require_once  ('connection.php');
        ?>
          <form class="sign-up-form" action="signup.php" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user-shield"></i>
              <input
                type="text"
                placeholder="First Name"
                autocomplete="off"
                autocapitalize="off"
                name="name1"
                required
              />
            </div>
            <div class="input-field">
              <i class="fas fa-user-circle"></i>
              <input
                type="text"
                placeholder="Full Name"
                autocomplete="off"
                autocapitalize="off"
                name="name2"
                required
              />
            </div>
            <div class="input-field">
              <i class="far fa-envelope"></i>
              <input
                type="email"
                placeholder="Email"
                autocomplete="off"
                autocapitalize="off"
                name="email1"
                required
              />
            </div>
            <b style="font-size: 10px"
              ><br />DO NOT include any country/area codes like (+91, 080, 022,
              00, etc.)</b
            >
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input
                type="tel"
                placeholder="10-Digit Phone Number"
                autocomplete="off"
                autocapitalize="off"
                name="phone1"
                required
              />
            </div>

            <script
              src="https://www.google.com/recaptcha/api.js"
              async
              defer
            ></script>
            <div
              class="g-recaptcha"
              data-sitekey="<?php echo CONTACTFORM_RECAPTCHA_SITE_KEY ?>"
            ></div>

            <input type="submit" class="bxtn" value="Sign up" name="submit1" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New to this Group ?</h3>
            <p>
              If this is your first time attending meetings with us, Kindly
              proceed to Sign Up
            </p>
            <button class="bxtn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already Registered with Us ?</h3>
            <p>
              Those who have already attended previous meetings with us, Need
              not to register ! Sign In with login details sent on your mail
            </p>
            <button class="bxtn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
