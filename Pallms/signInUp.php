<!DOCTYPE html>
<html lang="en">
  <head>
  <title>HebrOnline</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
    <link rel="stylesheet" href="assets/css/style1.css" />
    <link href="assets/img/icon.png"  sizes="32x32"  rel="icon">
     <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
.title_text
{
    transition: 0.3s;
    text-decoration: none;
    font-weight: 700;
    font-size: 46px;
    font-family: "Raleway", sans-serif;
    background: none;
    color:white;
}
</style>

  </head>
  <body style="background: rgb(95,207,128);background: linear-gradient(180deg, rgba(95,207,128,1) 0%, rgba(255,255,255,1) 100%);" >
  <div style="text-align: center; margin-top: 20px;">
      <h1 class="title_text">Welcome to HebrOnline!</h1>
      <h3 style="color: white;">Let's get started</h3>
    </div>

    <div class="blah">
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
  </div>
  <!-- Log In Form Section -->
  <section>
      <div class="container" id="container">
          <div class="form-container sign-up-container">
              <form action="../DB/addStudentDB.php" method="POST" enctype="multipart/form-data" onsubmit="return validatePassword();">
                  <h3>Sign Up</h3>
                  <span>As Student </span>
                   <label style="height: 60px;"  >
                      <input type="text" placeholder="First Name" name="firstName"  style="width: 48%;" required /> 
                      <input type="text"  name="lastName"  placeholder="Last Name" style="width: 48%;" required />
                  </label>

                   
                  <label style="height: 60px;" >
                      <input type="email" name="email" placeholder="Email" required/>
                  </label>
                  <label style="height: 60px;">
                      <input type="password" placeholder="Password" name="password" id="password" required/>
                  </label>

                <label style="height: 60px;">
                      <input type="text"  name="phone" placeholder="Phone" required/>
                  </label>
              <label style="height: 60px;">
                      <input type="text"  name="address"  placeholder="Address" required/>
                  </label>

      <input class="img-input"  type='number' id="imgStutas" name="imgStutas" value="0" hidden />
      <label class="btn" style="background-color: #5fcf80; color: white; border-radius: 20px; margin-top: 10px;" for="image">Select photo</label>
<input class="img-input" id="image" type='file' name="img" onchange="updateFileName(this);" accept="image/*" style="display: none;" />
<input type="text" id="selectedFileName" readonly style="margin-top: 10px; border: none; background-color: #f8f9fa; color: #495057; padding: 8px; border-radius: 5px;">
                
  

                  <button style="margin-top: 9px" type="submit"  id="submit" name="submit"  >Sign Up</button>
              </form>
          </div>
          <div class="form-container sign-in-container">
               <form role="form" action="../DB/loginDB.php" method="POST">
                  <h1>Sign in</h1>
                  
                   <label>
                      <input type="email" placeholder="Email" name="email" required/>
                  </label>
                  <label>
                      <input type="password" placeholder="Password" name="password" required/>
                  </label>
                  <a href="../login/resetPassword.php">Forgot your password?</a>
                       <button type="submit"     name="login" >Sign In </button>
              </form>
          </div>
          <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <h1>Log in</h1>
                      <p>Sign in here if you already have an account </p>
                      <button class="ghost mt-5" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                      <h1>Create, Account!</h1>
                      <p>Sign up if you still don't have an account ... </p>
                      <button class="ghost" id="signUp">Sign Up</button>
                  </div>
              </div>
          </div>
      </div>
      <br>
      <div style="text-align: center;">
        <a class="btn" style="background: #5fcf80; color:white; border-radius:20px;" href="index.php">Back to home screen</a>
    </div>
  </section>
  </div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="script.js"></script>

    <script>

    function updateFileName(input) {
    var fileName = input.files[0].name;
    document.getElementById('selectedFileName').value = fileName;
}

    
  function readURL1(input) {
  $("#imgStutas").val("0") ;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
  $("#imgStutas").val("1") ; 
        }
    }
    function validatePassword() {
    var passwordInput = document.getElementById("password");
    var password = passwordInput.value;

    if (password.length < 8) {
        sweetAlert("Caution", "Password length must be at least 8", "info"); 
        return false;
    }

    return true;
}


 
  document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
 
 const res = urlParams.get('res');
var myNewURL = "Online Lms/Pallms/signInUp.php";

if (res == 1  ) {

    sweetAlert("Done", "Please check your email to confirm your identity!", "success"); 
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
}

else if (res == 31  ) {

    sweetAlert("Congratulations!", "Welcome aboard HberOnline, let's start learning!", "success"); 
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
}
else if (res == 0  ) {
  
   sweetAlert("sign Up failed...", " something  is wrong!", "error"); 

   window.history.pushState("object or string", "Title", "/" + myNewURL );


  
}



 else if (res == 891 ) {
   
   window.history.pushState("object or string", "Title", "/" + myNewURL );

 
      sweetAlert("Oops...", "Your e-mail  or  Password  wrong!", "error");

}   
else if (res == 98 ) {
 window.history.pushState("object or string", "Title", "/" + myNewURL );

  swal("Done!", "Your password has been changed!", "success")
}



 else if (res == 821  ) {
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
      sweetAlert("Oops", "Your account is currently Deactivated, Please contact administration to learn more...", "error");

}

 else if (res == 371  ) {
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
      sweetAlert("Sign Up failed!", "The e-mail you entered is already being used", "error");

}

371

});

</script>

 
  </body>
</html>