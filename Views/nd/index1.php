
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="../css/style_page_princ_utilisateur.css">
		<link rel="stylesheet"  href="test.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">


		<!--stars rating test :worked but 3 lib alot
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
		-->

		<!-- test2 rating : working too but its like the first need alot and need jquery last version from website to be compatible with ...
		<link href="node_modules/bootstrap-star-rating/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
		<script src="node_modules/bootstrap-star-rating/js/star-rating.min.js" type="text/javascript"></script>-->
		

		<!-- Latest compiled and minified CSS :methode recomended in production -->
		<!-- 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		-->

		<style>
	#more {display: none;}
</style>
		

		<title>page d'accueil</title>
	</head>
	<body >
			<?php include("menu0.php"); ?>
		
			<!-- br not good choix find another solution after -->
			
		
		
                <div class="col-md-8 col-lg-push-2">
                    <h1>The Best Libraries That Every Book Lover Must Visit!</h1>
                    <p>!!! Hello !!!</p>
                    
                        <ul class="locat_icon">
                           <li> <a href="#"><img src="../icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="../icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="../icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="../icon/instagram.png"></a></li>
                        </ul>
                </div>


<div class="col-md-8 col-lg-push-2">

<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

</div>

<script src="../js/jquery-3.5.1.min.js"></script>

<script>
	function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

                <!--test rating starts 1
                <div class="container">
					<h2>Bootstrap 5 star rating example using jQuery star rating plugin :but need 3 lib to work corectly : very bad</h2>
					<br/>
    				<label for="input-1" class="control-label">One star:</label>
    				<input id="input-1" name="input-1" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="0.5" data-size="xs">
				</div>

				
				<script>
					$("#input-1").rating();
				</script>
   	    		-->
   	    		<!--
   	    		<input id="input-id" name="input-name" type="number" class="rating" min=1 max=10 step=2 data-size="lg" data-rtl="true">

   	    		<script>
   	    			$("#input-id").rating();
   	    		</script>-->
		
				<!--read more button -->
				
				<!--
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

				<button onclick="myFunction()" id="myBtn">Read more</button>

				<script>
					function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
				</script>
			-->
		
		<footer id="footer">
			<div id="footer-inner">
				<!--ecrire quelque chose-->
			</div>
		</footer>	

	<!-- jQuery library : recomended-->
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	-->
	<!-- Latest compiled JavaScript -->
	<!--
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	-->
	</body>
</html>