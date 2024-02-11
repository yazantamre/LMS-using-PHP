<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dual Login / Signup Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
    <link rel="stylesheet" href="assets/css/style1.css" />
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }

      .container {
        text-align: center;
      }

      .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
    </div>
    <!-- Log In Form Section -->
    <section>
      <div class="container" id="container">
        <div class="form-container sign-in-container" style="margin-top: 50px;">
          <form role="form" action="../DB/ConfirmEmailDB.php" method="POST">
            <h2>Confirm Email </h2>
            <label>
              <input type="email" placeholder="Email" name="email" required/>
            </label>
            <label>
              <input type="text" placeholder="confirmation code" name="confirmCode" required/>
            </label>
            <button type="submit" name="login">Confirm </button>
          </form>
        </div>
        <div class="overlay-container">
          <div class="overlay">
            <div class="overlay-panel overlay-right">
              <h1>Use the code we sent you!</h1>
              <p>Start your journey with HebrOnline</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", () => {
        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);
        const res = urlParams.get('res');
        var myNewURL = "Online Lms/Pallms/EmailConfirmation.php";
        if (res == 0) {
          sweetAlert("this email address or code not correct...", "Please enter your correct email and code ! ", "error");
          window.history.pushState("object or string", "Title", "/" + myNewURL);
        }
      });
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="script.js"></script>
  </body>
</html>
