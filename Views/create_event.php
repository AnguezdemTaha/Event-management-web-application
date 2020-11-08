<div id="createevent_block" >
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