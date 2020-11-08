<div id="sittings_block" >
  <center><h1>Sittings</h1></center>
  <br><br>
<!--username_block -->
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
            <center><br>
              <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
              <button class="btn btn-primary cancel_name" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
            </center>
          </div>
        </div>
      </form> 
    </div>
  </div>

<!--password_block -->
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
          <center><br>
            <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
            <button class="btn btn-primary cancel_password" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
          </center>
        </form>
      </div> 
    </div> 
  </div>

<!--email_block -->
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
          <center><br>
            <button class="btn btn-primary" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> Valider</button>
            <button class="btn btn-primary cancel_email" type="submit"  ><span class="glyphicon glyphicon-briefcase"></span> cancel</button>
          </center>
        </form>
      </div> 
    </div> 
  </div>

</div>