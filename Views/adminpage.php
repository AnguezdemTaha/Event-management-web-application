
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet"  href="eventpage.css">
    <link rel="stylesheet"  href="adminpage.css">
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
  <a class="userlist_item" href="#">users list</a>
  <a class="userdemands_item" href="#">demendes list</a>
  <a class="eventdemands_item" href="#">Event to approve</a>
  <a class="reports_item" href="#">reports</a>

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

<div class="users_table">
<div class="col-md-10 col-lg-10 col-lg-push-2">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name.user</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Birthday</th>
      <th scope="col">show</th>
      <th scope="col">delet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="userdemands_table">

<div class="col-md-10 col-lg-10 col-lg-push-2">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name.userdemand</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Birthday</th>
      <th scope="col">show</th>
      <th scope="col">delet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
  </tbody>
</table>
</div>

</div>

<div class="eventdemands_table">

<div class="col-md-10 col-lg-10 col-lg-push-2">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name.eventdem</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Birthday</th>
      <th scope="col">show</th>
      <th scope="col">delet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
  </tbody>
</table>
</div>

</div>
<div class="reports_table">

<div class="col-md-10 col-lg-10 col-lg-push-2">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name/reports</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Birthday</th>
      <th scope="col">show</th>
      <th scope="col">delet</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="">link</a></td>
      <td><a href="">link</a></td>
    </tr>
  </tbody>
</table>
</div>

</div>

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
      
      
        <div class="row">
          <div class="col-md-6 col-lg-6 col-lg-push-3">
              <center><img src=""><p>here will be the user image</p></center>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-6">
            <div class="row">
              <center><p>here will be the name:</p></center>
            </div>
            <div class="row">
              <center><p>here will be the lastname</p></center>
            </div>
            <div class="row">
              <center><p>here will be the email</p></center>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="row">
              <center><p>here will be the phone numbre</p></center>
            </div>
            <div class="row">
              <center><p>here will be the ..</p></center>
            </div>
            <div class="row">
              <center><p>here will be the ..</p></center>
            </div>
          </div>
        </div>
        
        <div class="row">
          <center><p>here will be remove user button</p></center>
        </div>

  </div>
  </div>
</div>




</div>








		

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="eventpage.js"></script>
<script src="adminpage.js"></script>

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