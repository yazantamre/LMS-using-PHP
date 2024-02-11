
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

  </head>
  <body>
    <div class="ocean">
      <div class="wave"></div>
      <div class="wave"></div>
  </div>
  <!-- Log In Form Section -->
  <section>
      <div class="container" id="container">
          <div class="form-container sign-up-container">
              <form action="../DB/addStudentDB.php" method="POST" enctype="multipart/form-data">
                  <h3>Sign Up</h3>
                  <span>As Student </span>
                   <label style="height: 60px;"  >
                      <input type="text" placeholder="First Name" name="firstName"  style="width: 48%;" /> 
                      <input type="text"  name="lastName"  placeholder="Last Name" style="width: 48%;" />
                  </label>

                   
                  <label style="height: 60px;" >
                      <input type="email" name="email" placeholder="Email"/>
                  </label>
                  <label style="height: 60px;">
                      <input type="password" placeholder="Password" name="password"/>

                  </label>

                <label style="height: 60px;">
                      <input type="text"  name="phone" placeholder="Phone"/>
                  </label>
              <label style="height: 60px;">
                      <input type="text"  name="address"  placeholder="Address"/>
                  </label>

      <input class="img-input"  type='number' id="imgStutas" name="imgStutas"  required  value="0" hidden />
                        
     <input class="img-input"  type='file' name="img" onchange="readURL1(this);"  accept="image/*"  style="height: 50px;background: none; "/>
                
 

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

 
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <script src="script.js"></script>

    <script>

    
  function readURL1(input) {
  $("#imgStutas").val("0") ;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
  $("#imgStutas").val("1") ;

            
        }
    } 


 
  document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
 
 const res = urlParams.get('res');
var myNewURL = "c/Pallms/signInUp.php";

if (res == 1  ) {

    sweetAlert("Done", "We will contact you as soon as possible to confirm your account !", "success"); 
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
}
else if (res == 0  ) {
  
   sweetAlert("sign Up failed...", "This email has already been used ", "error"); 

   window.history.pushState("object or string", "Title", "/" + myNewURL );


  
}



 else if (res == 891 ) {
   
   window.history.pushState("object or string", "Title", "/" + myNewURL );

 
      sweetAlert("Oops...", " your email  or  Password  wrong! ", "error");

}   
else if (res == 98 ) {
 window.history.pushState("object or string", "Title", "/" + myNewURL );

  swal("Good job!", "Your password has been changed!", "success")
}



 else if (res == 821  ) {
    window.history.pushState("object or string", "Title", "/" + myNewURL );
 
      sweetAlert("Your account is deactivated.", " Please contact the administration to learn more and solve the problem ... ", "error");

}

});

</script>

 
  </body>
</html>