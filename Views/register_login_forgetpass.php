<div id="register_login_forgetpass">

	<div id="registersignin_list">
    <ul class="tabs">
      <li>
        <button  type="button" class="login_button">
          <a class="active" href="#signin" id="login-tab" name="login-tab"><span id="login_icon"></span> Login</a>
        </button>
      </li>
      <li>
        <button  type="button" class="register_button">
          <a href="#register" id="register-tab" name="register-tab"><span id="signup_icon"></span> Register</a>
        </button>
      </li>
      <li>
        <span onclick="document.getElementById('register_login_forgetpass_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
      </li>
    </ul>
  </div>

  <div class="form-display " id="login">
    <center><h1>Login</h1></center>
    <br><br>
		<form  class=" animate" id="myForm" method="POST" action="../Controllers/Controller_user.php?action=Login">
			<div class="imgcontainer">
    		<img src="img_avatar2.png" alt="Avatar" class="avatar">
  		</div>
      <!--message de validation des infos database-->
 			<center><h4 class = "form-signin-heading"><?php if(isset($msg)) echo $msg;else echo ''; ?></h4></center>
			<input class="form-control" type="text" name="mail" id="mail" placeholder="Enter Mail">
      <input class="form-control" type="password" name="password" id="password"  placeholder="Enter Password">
      <input type="checkbox" checked="checked" name="remember"> Remember me
      <center>
        <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> SE CONNECTER</button>
      </center>
        <a class="register_button" href="#"><h4>create a new account ?</h4></a>
        <a class="forget_pass_button" href="#"><h4>forget password</h4></a>
      </center>
    </form>
  </div>

  <div class="form-display " id="register">
    <center><h1>Register</h1></center>
    <form class="animate" action="" method="post" name="login">
      <input type="text" name="name"  class="form-control my-input champ" id="name" placeholder="Name">
      <p class="namec" hidden>testestestesgkgzaeajzkgkjezgkajze </p>
      <input type="email" name="email"  class="form-control my-input champ" id="email" placeholder="Email">
      <input type="password" name="password"  class="form-control my-input champ" id="password" placeholder="password">
      <input type="password" name="confirmation"  class="form-control my-input champ" id="confirmation" placeholder="confirmation">
      <input type="number" min="0" name="phone" id="phone"  class="form-control my-input champ" placeholder="Phone">
      <button type="submit" class=" btn btn-block send-button tx-tfm" id="submit">Create Your Free Account</button>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>
      <div class="form-group">
        <a class="btn btn-block g-button" href="#">Sign up with Google</a>
      </div>
      <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
      </p>
      <a class="login_button" href="#"><h4>you have an account ?</h4></a>
    </form>  		
  </div>

  <div class="form-display " id="forget_pass"> 
    <center><h1>forget password</h1></center>
    <form  class=" animate" id="myForm" method="POST" action="">
      <!--message de validation des infos database-->
 	  	<center><h4 class = "form-signin-heading"><?php if(isset($msg)) echo $msg; else echo ''; ?></h4></center>
			<input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter Email">
      <center><br><button class="btn btn-primary" type="submit"  > Send Email for confirmation</button>
        <a class="register_button" href="#"><h4>create a new account ?</h4></a>
        <a class="login_button" href="#"><h4>you have an account ?</h4></a>
      </center>
    </form>
  </div>

</div>