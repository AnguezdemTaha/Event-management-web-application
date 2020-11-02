<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="../css/style_page_princ_utilisateur.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
		
    

		<title>Page Créer Compte</title>	
	</head>
	<body>
		<?php include("menu0.php"); ?>
		
<div class="container">
  

<div class="col-md-6 col-lg-6 col-xl-6 col-md-push-3 col-lg-push-3 col-xl-push-3 mx-auto text-center regestration_form">
  <div class="row">
  <div class="text-center">
   <div class="header-title">
    <h1 class="wv-heading--title">
       Check out — it’s free!
    </h1>
    <h2 class="wv-heading--subtitle">
       Lorem ipsum dolor sit amet! Neque porro quisquam est qui do dolor amet, adipisci velit...
    </h2>
    <p id="erreur" hidden>
        you have a error §§§
    </p>
   </div>
  </div>
  </div>

  <div class="row">
   
   <div class="col-md-8 col-lg-8 col-xl-8 col-md-push-2 col-lg-push-2 col-xl-push-2 mx-auto">
    
    <div class="myform form">
       <form action="" method="post" name="login">
        
        


        <div class="form-group">
         <input type="text" name="name"  class="form-control my-input champ" id="name" placeholder="Name">
        </div>

        <div class="form-group">
         <input type="email" name="email"  class="form-control my-input champ" id="email" placeholder="Email">
        </div>

        <div class="form-group">
         <input type="password" name="password"  class="form-control my-input champ" id="password" placeholder="password">
        </div>
        <div class="form-group">
         <input type="password" name="confirmation"  class="form-control my-input champ" id="confirmation" placeholder="confirmation">
        </div>

        <div class="form-group">
         <input type="number" min="0" name="phone" id="phone"  class="form-control my-input champ" placeholder="Phone">
        </div>

        <div class="text-center ">
         <button type="submit" class=" btn btn-block send-button tx-tfm" id="submit">Create Your Free Account</button>
        </div>

        
         <div class="login-or">
          <hr class="hr-or">
          <span class="span-or">or</span>
         </div>
        


        <div class="form-group">
         <a class="btn btn-block g-button" href="#">
          Sign up with Google
         </a>
        </div>
        

        <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
        </p>
       </form>
    </div>
   
   </div>
  
  </div>
</div>
</div>
		


<script src="../js/jquery-3.5.1.min.js"></script>
<script src="formulaire.js"></script>




	</body>

</html>