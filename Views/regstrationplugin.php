
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="../css/style_page_princ_utilisateur.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Latest compiled and minified CSS :methode recomended in production -->
		<!-- 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		-->

		

		<title>page d'accueil</title>
	</head>
	<body >
	<div class="container">
        <div class="flat-design-form">
            <ul class="tabs">
                <li><a class="active" href="#login" id="login-tab" name=
                "login-tab"><span id="login_icon"></span> Login</a></li>

                <li><a href="#register" id="register-tab" name=
                "register-tab"><span id="signup_icon"></span> Register</a></li>
            </ul>


     	<div class="form-display show" id="login">
        <h1>Login</h1>

        <form action="" method="post" novalidate="">
            <fieldset>
                <ul>
                    <li>
                        <div class="item">
                            <input data-validate-length-range="6" name="name"
                            placeholder="Username" required="required" type=
                            "text">
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <input data-validate-length-range="6" name=
                            "password" placeholder="Password" required=
                            'required' type="password">
                        </div>
                    </li>

                    <li><input class="button-login" type="submit" value=
                    "Login"></li>
                </ul>
            </fieldset>
        </form>
    	</div>


    	<div class="form-display hide" id="register">
        <h1>Register</h1>

        <form action="" method="post" novalidate="">
            <fieldset>
                <ul>
                    <li>
                        <div class="item">
                            <input data-validate-length-range="6" name="name"
                            placeholder="Username" required="required" type=
                            "text">
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <input data-validate-length="6,8" name="password"
                            placeholder="Password" required='required' type=
                            "text">
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <input class='email' name="email" placeholder=
                            "Email" required="required" type="email">
                        </div>
                    </li>

                    <li>
                        <div class="item">
                            <label><input name="url" placeholder="Website link"
                            required="required" type="url"></label>
                        </div>
                    </li>

                    <li><input class="button-register" id='send' type="submit"
                    value="Sign Up"></li>
                </ul>
            </fieldset>
        </form>
    	</div>

    	<script src="../js/jquery-3.5.1.min.js"></script>
		<script src="nav2.js"></script>
	</body>
</html>