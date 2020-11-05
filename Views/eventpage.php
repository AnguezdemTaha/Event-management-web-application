
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="eventpage.css">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap-3.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Add icon library for socail media +star icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!--stars rating test :worked but 3 lib alot-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    
    
		<title>page d'accueil</title>
	</head>
	
	<body >
			
		<?php include("menu1.php"); ?>


<div id="mySidenav" class="sidenav">
  
  <br>
  <!--double select -->
   <ul class="listinfo_Website">
                  <li>
                    <select name="pets" id="pet-select">
                      <option value="">--choix double--</option>
                      <option value="dog">place</option>
                      <option value="cat">type</option>
                      <option value="hamster">organisator</option>
                    
                    </select>
                  </li>
  </ul>
  <a class="home-website" href="#">Evnets participé</a>
  <a class="about-website" href="#">Events ...</a>
  <a class="services-website" href="#">Event ...</a>

  <!--faire une line separation-->
  <a class="services-website sittings" href="#">sittings</a>
  <a class="services-website" href="#">log out</a>
  
</div>


<div  id= "notification_block" class="notification_block">
  
  <br>
  <a class="home-website" href="#">N1: Home</a></li>
  <li><a class="about-website" href="#">N2: About</a></li>
  <li><a class="services-website" href="#">N3 Services</a></li>
  
</div>






<br><br>






<div id="main">


<div id="id01" class="modal">
        
  <div class="modal-content" >
  <div class="form-display " >
      <center><h1>Sittings</h1></center>

        
        <br><br>
      <div class="user_name">
        
        <div class="row name_block"> 
          <div class="col-md-3 col-lg-3">
            <label  class="form_cols" for="uesr_name"><h4>Nom :</h4></label>

          </div>
          <div class="col-md-6 col-lg-6">
              <label  class="form_cols" for="uesr_name"><h4>testname testlastname</h4></label>
          </div>  
          <div class="col-md-3 col-lg-3">
            <a class="editname_button" href="#"><h4>edit nom</h4></a>
          </div>

        </div>
        

        <div class="row editname_block">
        <form  class=" animate" id="myForm" method="POST" action="">
          
          <div class="row">
            <div class="col-md-3 col-lg-3 col-lg-push-2">
              <label  class="form_cols" for="firstName"><h4>Nom :</h4></label>
            </div>
            <div class="col-md-5 col-lg-5 col-lg-push-2">
              <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="name" value="Test">
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-lg-3 col-lg-push-2">
              <label  class="form_cols" for="lastName"><h4>lastname :</h4></label>
            </div>
            <div class="col-md-5 col-lg-5 col-lg-push-2">
              <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="name" value="Testlast">
              <input class="form-control" type="password" name="pwd1" id="pwd1"  placeholder="Enter Password for confirmation">
              <center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
                <button class="btn btn-primary cancel_name" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
              </center>
            </div>
          </div>
        </form> 
        </div>
      </div>


      <div class="user_password">
        
        <div class="row password_block"> 
          <div class="col-md-3 col-lg-3">
            <label  class="form_cols" for="uesr_name"><h4>Password :</h4></label>

          </div>
          
          <div class="col-md-3 col-lg-3 col-lg-push-6">
            <a class="editpassword_button" href="#"><h4>edit Password</h4></a>
          </div>

        </div>
        
        <div class="row editpassword_block">
          <div class="col-md-3 col-lg-3 col-lg-push-2">
            <label  class="form_cols" for="lastName"><h4>Password:</h4></label>
          </div>
          <div class="col-md-5 col-lg-5 col-lg-push-2">
            
            <form  class=" animate" id="myForm" method="POST" action="">
              <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="New pass" >
              <input class="form-control" type="password" name="pwd1" id="pwd1"  placeholder="new pass confirmation">
              <input class="form-control" type="password" name="pwd1" id="pwd1"  placeholder="Enter last Password for confirmation">
              <center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
              <button class="btn btn-primary cancel_password" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
            </center>
            </form>

          </div> 
        </div> 

      </div>



      <div class="user_email">
        
        <div class="row email_block"> 
          <div class="col-md-3 col-lg-3">
            <label  class="form_cols" for="uesr_name"><h4>Email :</h4></label>

          </div>
          <div class="col-md-6 col-lg-6">
              <label  class="form_cols" for="uesr_name"><h4>test@test.com</h4></label>
          </div>  
          <div class="col-md-3 col-lg-3">
            <a class="editemail_button" href="#"><h4>edit email</h4></a>
          </div>

        </div>
        
        <div class="row editemail_block">
          <div class="col-md-3 col-lg-3 col-lg-push-2">
            <label  class="form_cols" for="lastName"><h4>Email :</h4></label>
          </div>
          <div class="col-md-5 col-lg-5 col-lg-push-2">
            
            <form  class=" animate" id="myForm" method="POST" action="">
              <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="name" value="Test@g.com">
              <input class="form-control" type="password" name="pwd1" id="pwd1"  placeholder="Enter Password for confirmation">
              <center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
              <button class="btn btn-primary cancel_email" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
            </center>
            </form>

          </div> 
        </div> 

      </div>

      <div class="user_email">
        
        <div class="row email_block"> 
          <div class="col-md-3 col-lg-3">
            <label  class="form_cols" for="uesr_name"><h4>Email :</h4></label>

          </div>
          <div class="col-md-6 col-lg-6">
              <label  class="form_cols" for="uesr_name"><h4>test@test.com</h4></label>
          </div>  
          <div class="col-md-3 col-lg-3">
            <a class="editemail_button" href="#"><h4>edit email</h4></a>
          </div>

        </div>
        
        <div class="row editemail_block">
          <div class="col-md-3 col-lg-3 col-lg-push-2">
            <label  class="form_cols" for="lastName"><h4>Email :</h4></label>
          </div>
          <div class="col-md-5 col-lg-5 col-lg-push-2">
            
            <form  class=" animate" id="myForm" method="POST" action="">
              <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="name" value="Test@g.com">
              <input class="form-control" type="password" name="pwd1" id="pwd1"  placeholder="Enter Password for confirmation">
              <center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
              </center>
            </form>

          </div> 
        </div> 

      </div>



      




        
      </div>
    </div>
  </div>







<div id="id02" class="modal2">
        
  <div class="modal-content" >
  <div class="form-display " >
      

  <center><h1>Create Event</h1></center>
  <form  class=" animate" id="myForm" method="POST" action="">
    <div class="row">      
      <div class="col-md-5 col-lg-5 col-lg-push-1">
        <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="Event name">
      </div>
      <div class="col-md-5 col-lg-5 col-lg-push-1">
        <input class="form-control" type="text" name="pwd1" id="pwd1"  placeholder="Club owner">
      </div>
    </div>

    <div class="row">      
      <div class="col-md-5 col-lg-5 col-lg-push-1">
        <div class="col-md-4 col-lg-4">
          <label>date_debut</label>
        </div>
        <div class="col-md-8 col-lg-8">
          <input class="form-control" value="2018-06-12T19:30" type="datetime-local"  >
        </div>
      </div>
      <div class="col-md-5 col-lg-5 col-lg-push-1">
        <div class="col-md-4 col-lg-4">
          <label>date_debut</label>
        </div>
        <div class="col-md-8 col-lg-8">
          <input class="form-control" value="2018-06-12T19:30" type="datetime-local"  >
        </div>
      </div>
    </div>

    <div class="row">      
      <div class="col-md-6 col-lg-6 col-lg-push-3">
        <div class="col-md-4 col-lg-4">
          <label>event image</label>
        </div>
        <div class="col-md-8 col-lg-8">
          <input class="form-control" type="file" name="pwd1" id="pwd1"  placeholder="Event image">
        </div>
      </div>
    </div>
    <div class="row">      
      <div class="col-md-6 col-lg-6 col-lg-push-3">
        <div class="col-md-4 col-lg-4">
          <label>place</label>
        </div>
        <div class="col-md-8 col-lg-8">
          <select id="pet-select">
            <option value="">--Please choose a place--</option>
            <option value="Rabat">rabat</option>
            <option value="Casa">casa</option>
            <option value="Agora">ensias</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">      
      <div class="col-md-6 col-lg-6 col-lg-push-3">
        <input class="form-control" type="passwrod" name="pwd1" id="pwd1"  placeholder="passwrod validation">
      </div>
    </div>
    <div class="row">      
      <center><br><button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span>create event</button>
        <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span>cancel</button>
      </center>
    </div>
                  
                
            
  </form>



        
  </div>
  </div>
</div>



<div class="flip-card">
<div class="flip-card-inner">
<!--front of our event card -->
<div class="flip-card-front">
  <div class="col-md-10 col-lg-10 col-lg-push-2 cardevent_block">
    
     <div class="row">
        <div class="col-md-4 col-lg-4">

          <div class="row">
              <div class="col-md-6 col-lg-6">
                <p>title :</p>
              </div>
              <div class="col-md-6 col-lg-6">
                  <!--prob :inline -->
                  <p class="eventblock_text">ev :</p>
                
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                
              </div>
          </div>

          <div class="row">
              <img class="event_image" src="backround_img1.jpg" alt="Italian Trulli">
          </div>

          <div class="row">
              <p>date :</p>
          </div>

          <div class="row">
            <p>your rating: stars </p>
            <!-- very wrong its need alot of improve -->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span> 

            <label for="input-1" class="control-label">One star:</label>
            <input id="input-1" name="input-1" class="rating rating-loading" value="1" data-min="0" data-max="5" data-step="0.5" data-size="xs">
        
          </div>

        </div>

        <div class="col-md-8 col-lg-8">
          <div class="row">
              <div class="col-md-10 col-lg-10">
                <p>somthing :</p>
              </div>
              <div class="col-md-1 col-lg-1 col-lg-push-1">
                <button  type="button" class="btn btn-success report_button" >
                  <div class="menu-icon"></div>
                  <div class="menu-icon"></div>
                  <div class="menu-icon"></div>
                </button>
              </div>
              <div  id= "reportevent_block" class="reportevent_block">
                <li><a class="home-website" href="#">N1: report1</a></li>
                <li><a class="about-website" href="#">N2: report2</a></li>
                <li><a class="services-website" href="#">N3: report3</a></li>
              </div>
          </div>
          <div class="row">
              <p>somthing :</p>
          </div>
          <div class="row">
              <p>somthing :</p>
          </div>
          <div class="row">
              <p>somthing :</p>
          </div>
          <div class="row">
              <p>somthing :</p>
          </div>
          <div class="row">
              <p>alot of text here +showmore/less :</p>
              <!-- dots need to be dispplayed by js depend on text size -->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more_text">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

              <button  id="showmoreless_button">Read more</button>
          </div>
        </div>
     </div>


     <div class="row">
        <div class="col-md-4 col-lg-4">
          <a href="#" class="participation">
              <i  class="fa fa-thumbs-up participation_icon"></i>
              <span>your participation+icon (participation number)</span>
                        
          </a>
        </div>

        <div class="col-md-4 col-lg-4">
          <a href="#" class="comments">
              <span>button to show comments</span>        
          </a>

        </div>
        <div class="col-md-4 col-lg-4">
          <a href="#" class="graphs"> 
              <span>button to show graphs/animated</span>         
          </a>

        </div>

     </div>

     <div class="row comments_block">
        <p> there is comments +show_less/more  this is an exemple here</p>
        
        <div class="usercomments">
        <div class="col-md-1 col-lg-">
          <p>img</p>
        </div>
        <div class="col-md-11 col-lg-11">
          <div class="row">
            <p>username</p>
          </div>
          <div class="row">
            <p>comment</p>
          </div>
        </div>
        </div>

        <div class="inputcomments">
        <div class="col-md-1 col-lg-">
          <p>img</p>
        </div>
        <div class="col-md-11 col-lg-11">
          <div class="row">
            <p>username</p>
          </div>
          <div class="row">
            <textarea id="w3review" name="w3review" rows="4" cols="100">
              At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
            </textarea>
          </div>
        </div>
        </div>


     </div>

  </div>
</div>

<!--back of card-->
<div class="flip-card-back hide">
      <h1>John Doe</h1>
      <p>Architect & Engineer</p>
      <p>We love that guy</p>
</div>




</div>
</div>
<div class="col-md-4 col-lg-4 col-lg-push-5">
<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
</div>

</div>


         
		<!-- must be included better : alot of things must be inculed too but i need to finich first testing -->
		

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="eventpage.js"></script>
<script>
// Get the modal , have a prob in traduction this to jquery, needd ot be done later
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

	</body>
</html>